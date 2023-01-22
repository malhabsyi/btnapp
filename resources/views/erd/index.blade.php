<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover"/>
      <meta name="description" content="Interactive entity-relationship diagram or data model diagram implemented by GoJS in JavaScript for HTML."/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.6/tailwind.min.css"/>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/2.1.46/go.js"></script>
      <script src="https://unpkg.com/gojs@2.1.47/extensions/Figures.js"></script>
      <title>ERD</title>
   </head>
   <body class="bg-gray-100 tracking-wide bg-gray-200">
        <nav class="bg-white py-2 ">
            <div class="container px-4 mx-auto md:flex md:items-center">

            <div class="flex justify-between items-center">
                <a href="erd" class="font-bold text-xl text-indigo-600">ERD</a>
            </div>

                <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">

                    <a href="https://github.com/kevincobain2000/laravel-erd" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Request Feature</a>
                </div>
            </div>
        </nav>
        <div id="app" v-cloak class="w-full flex lg:pt-10">
            <aside class="text-xl text-grey-darkest break-all bg-gray-200 pl-2 h-screen sticky top-1 overflow-auto">
                <b class="text-sm">Filter by Relation Type</b>
                <div class="text-sm">
                    <input type="checkbox" class="text-sm" id="input-relation-type-checkbox-check-all"> check all
                </div>

                <div id="filter-by-relation-type"></div>
                <b class="text-sm">Filter by Table Name</b>
                <div class="text-sm">
                    <input type="checkbox" id="input-table-names-checkbox-check-all"> check all
                </div>
                <div id="filter-by-table-name"></div>
            </aside>
            <div class="ml-6 mr-6 pl-2 w-10/12 bg-gray-300 p-2">
                <div id="myDiagramDiv" style="background-color: white; width: 100%; height: 95vh"></div>
            </div>
      </div>
      <script>

var nodeDataArray = [];
var linkDataArray = [];
var nodeDataArray = [];
var linkDataArray = [];
function init() {
  var $ = go.GraphObject.make; // for conciseness in defining templates

  myDiagram =
      $(go.Diagram, "myDiagramDiv", // must name or refer to the DIV HTML element
          {
              allowDelete: false,
              allowCopy: false,
              layout: $(go.ForceDirectedLayout),
              "undoManager.isEnabled": true
          });

  var itemTempl =
      $(go.Panel, "Horizontal", // this Panel is a row in the containing Table
          new go.Binding("portId", "name"), // this Panel is a "port"
          {
              background: "transparent", // so this port's background can be picked by the mouse
              fromSpot: go.Spot.Right, // links only go from the right side to the left side
              toSpot: go.Spot.Left,
              // allow drawing links from or to this port:
              fromLinkable: false,
              toLinkable: false
          },
          $(go.Shape, {
                  desiredSize: new go.Size(15, 15),
                  strokeJoin: "round",
                  strokeWidth: 3,
                  stroke: null,
                  margin: 2,
                  // but disallow drawing links from or to this shape:
                  fromLinkable: false,
                  toLinkable: false
              },
              new go.Binding("figure", "figure"),
              new go.Binding("stroke", "color"),
              new go.Binding("fill", "color")),
          $(go.TextBlock, {
                  margin: new go.Margin(0, 5),
                  column: 1,
                  font: "13px sans-serif",
                  alignment: go.Spot.Left,
                  // and disallow drawing links from or to this text:
                  fromLinkable: false,
                  toLinkable: false
              },
              new go.Binding("text", "name")),
          $(go.TextBlock, {
                  margin: new go.Margin(0, 5),
                  column: 2,
                  font: "11px courier",
                  alignment: go.Spot.Left
              },
              new go.Binding("text", "info"))
      );

  // define the Node template, representing an entity
  myDiagram.nodeTemplate =
      $(go.Node, "Auto", // the whole node panel
          {
              selectionAdorned: true,
              resizable: true,
              layoutConditions: go.Part.LayoutStandard & ~go.Part.LayoutNodeSized,
              fromSpot: go.Spot.AllSides,
              toSpot: go.Spot.AllSides,
              isShadowed: true,
              shadowOffset: new go.Point(3, 3),
              shadowColor: "#C5C1AA"
          },
          new go.Binding("location", "location").makeTwoWay(),
          // whenever the PanelExpanderButton changes the visible property of the "LIST" panel,
          // clear out any desiredSize set by the ResizingTool.
          new go.Binding("desiredSize", "visible", function(v) {
              return new go.Size(NaN, NaN);
          }).ofObject("LIST"),
          // define the node's outer shape, which will surround the Table
          $(go.Shape, "RoundedRectangle", {
              fill: 'white',
              stroke: "#eeeeee",
              strokeWidth: 6
          }),
          $(go.Panel, "Table", {
                  margin: 8,
                  stretch: go.GraphObject.Fill
              },
              $(go.RowColumnDefinition, {
                  row: 0,
                  sizing: go.RowColumnDefinition.None
              }),

              // the table header
              $(go.TextBlock, {
                      row: 0,
                      alignment: go.Spot.Left,
                      margin: new go.Margin(0, 24, 0, 2), // leave room for Button
                      font: "bold 16px sans-serif"
                  },
                  new go.Binding("text", "key")),
              // the collapse/expand button
              $("PanelExpanderButton", "LIST", // the name of the element whose visibility this button toggles
                  {
                      row: 0,
                      alignment: go.Spot.TopRight
                  }),
              // the list of Panels, each showing an attribute
              $(go.Panel, "Vertical", {
                      name: "LIST",
                      row: 1,
                      padding: 3,
                      alignment: go.Spot.TopLeft,
                      defaultAlignment: go.Spot.Left,
                      stretch: go.GraphObject.Horizontal,
                      itemTemplate: itemTempl,
                  },
                  new go.Binding("itemArray", "schema"))
          ) // end Table Panel
      ); // end Node
  // define the Link template, representing a relationship
  myDiagram.linkTemplate =
      $(go.Link, // the whole link panel
          {
              selectionAdorned: true,
              layerName: "Foreground",
              reshapable: true,
              routing: go.Link.AvoidsNodes,
              corner: 5,
              curve: go.Link.Orthogonal,
              curviness: 0,
          },
          $(go.Shape, // the link shape
              {
                  stroke: "#303B45",
                  strokeWidth: 1.5,
              }),
          $(go.Shape, // the arrowhead
              {
                  toArrow: "Triangle",
                  fill: "#1967B3"
              }),
          $(go.TextBlock, // the "from" label
              {
                  textAlign: "center",
                  font: "bold 12px sans-serif",
                  stroke: "#1967B3",
                  segmentIndex: 1.5,
                  segmentOffset: new go.Point(NaN, NaN),
                  segmentOrientation: go.Link.Horizontal,
                  fromLinkable: true,
                  toLinkable: true
              },
              new go.Binding("text", "fromText")),

          $(go.TextBlock, // the "to" label
              {
                  textAlign: "center",
                  font: "bold 12px sans-serif",
                  stroke: "#1967B3",
                  segmentIndex: -10,
                  segmentOffset: new go.Point(NaN, NaN),
                  segmentOrientation: go.Link.OrientUpright,
                  fromLinkable: true,
                  toLinkable: true
              },
              new go.Binding("text", "toText"))
      );

  myDiagram.model = $(go.GraphLinksModel, {
      copiesArrays: true,
      copiesArrayObjects: true,
      linkFromPortIdProperty: "fromPort",
      linkToPortIdProperty: "toPort",
      nodeDataArray: nodeDataArray,
      linkDataArray: linkDataArray
  });
  loadFilterByTableNames()
  loadFilterByRelationType()
  setCheckboxesForTableNames();
  setCheckboxesForRelationTypes();
}


function loadFilterByRelationType() {
  var json = linkDataArray;
  var appended = [];
  $.each(json, function(i, v) {
      // check if doesn't exist in the array
      if ($.inArray(this.type, appended) == -1) {
          // append
          appended.push(this.type)
          $("#filter-by-relation-type").append($("<div class='text-sm'>").text(this.type).prepend(
              $("<input>").attr({
                  'type': 'checkbox',
                  'checked': true,
                  'class': 'input-relation-type-checkbox',
                  'name': 'subscribe-relation-type',
                  "data-feed": this.type
              }).val(this.type)
              .prop('checked', this.checked)
          ));
      }
  });
  $(".input-relation-type-checkbox").on('change', function() {
      setCheckboxesForTableNames()
      setCheckboxesForRelationTypes()
  });
}

function setCheckboxesForRelationTypes() {
  newLinkDataArray = []

  $(".input-relation-type-checkbox").each(function() {
      if ($(this).prop('checked')) {
          console.log($(this).val())
          for (let i = 0; i < linkDataArray.length; i++) {
              const element = linkDataArray[i];
              if (element.type == $(this).val()) {
                  newLinkDataArray.push(element)
              }
          }
      }
  });
  myDiagram.model.linkDataArray = newLinkDataArray
}

function loadFilterByTableNames() {
  var json = nodeDataArray;
  var appended = [];
  $.each(json, function(i, v) {
      // check if doesn't exist in the array
      if ($.inArray(this.key, appended) == -1) {
          // append
          appended.push(this.key)
          $("#filter-by-table-name").append($("<div class='text-sm'>").text(this.key).prepend(
              $("<input>").attr({
                  'type': 'checkbox',
                  'checked': true,
                  'class': 'input-table-name-checkbox',
                  'name': 'subscribe-table-name',
                  "data-feed": this.key
              }).val(this.key)
              .prop('checked', this.checked)
          ));
      }
  });

  $(".input-table-name-checkbox").on('change', function() {
      setCheckboxesForTableNames();
      setCheckboxesForRelationTypes();
  });
}


$("#input-relation-type-checkbox-check-all").on('change', function() {
  $(".input-relation-type-checkbox").prop('checked', this.checked);
  setCheckboxesForTableNames();
  setCheckboxesForRelationTypes();
});

$("#input-table-names-checkbox-check-all").on('change', function() {
  $(".input-table-name-checkbox").prop('checked', this.checked);
  setCheckboxesForTableNames();
  setCheckboxesForRelationTypes();
});

function setCheckboxesForTableNames() {
  newNodeDataArray = []
  newLinkDataArray = []

  $(".input-table-name-checkbox").each(function() {
      if ($(this).prop('checked')) {

          for (let i = 0; i < nodeDataArray.length; i++) {
              const element = nodeDataArray[i];
              if (element.key == $(this).val()) {
                  newNodeDataArray.push(element)
              }
          }
          for (let i = 0; i < linkDataArray.length; i++) {
              const element = linkDataArray[i];
              if (element.from == $(this).val() || element.to == $(this).val()) {
                  newLinkDataArray.push(element)
              }
          }
      }
  });
  myDiagram.model.nodeDataArray = newNodeDataArray
  myDiagram.model.linkDataArray = newLinkDataArray
}

var docs = "{\"link_data\":[{\"from\":\"atms\",\"to\":\"outlet_btns\",\"fromText\":\"1..1\\nBelongs To\",\"toText\":\"\",\"fromPort\":\"outlet_id\",\"toPort\":\"id\",\"type\":\"BelongsTo\"},{\"from\":\"atms\",\"to\":\"item_atms\",\"fromText\":\"1..*\\nHas Many\",\"toText\":\"\",\"fromPort\":\"id\",\"toPort\":\"atm_id\",\"type\":\"HasMany\"},{\"from\":\"item_atms\",\"to\":\"atms\",\"fromText\":\"1..1\\nBelongs To\",\"toText\":\"\",\"fromPort\":\"atm_id\",\"toPort\":\"id\",\"type\":\"BelongsTo\"},{\"from\":\"item_outlets\",\"to\":\"outlet_btns\",\"fromText\":\"1..1\\nBelongs To\",\"toText\":\"\",\"fromPort\":\"outlet_id\",\"toPort\":\"id\",\"type\":\"BelongsTo\"},{\"from\":\"kantor_cabangs\",\"to\":\"users\",\"fromText\":\"1..*\\nHas Many\",\"toText\":\"\",\"fromPort\":\"id\",\"toPort\":\"kantor_cabang_id\",\"type\":\"HasMany\"},{\"from\":\"kantor_cabangs\",\"to\":\"outlet_btns\",\"fromText\":\"1..*\\nHas Many\",\"toText\":\"\",\"fromPort\":\"id\",\"toPort\":\"kantor_cabang_id\",\"type\":\"HasMany\"},{\"from\":\"kantor_cabangs\",\"to\":\"atms\",\"fromText\":\"1..*\\nHas Many\",\"toText\":\"\",\"fromPort\":\"id\",\"toPort\":\"kantor_cabang_id\",\"type\":\"HasMany\"},{\"from\":\"outlet_btns\",\"to\":\"kantor_cabangs\",\"fromText\":\"1..1\\nBelongs To\",\"toText\":\"\",\"fromPort\":\"kantor_cabang_id\",\"toPort\":\"id\",\"type\":\"BelongsTo\"},{\"from\":\"outlet_btns\",\"to\":\"item_outlets\",\"fromText\":\"1..*\\nHas Many\",\"toText\":\"\",\"fromPort\":\"id\",\"toPort\":\"outlet_btn_id\",\"type\":\"HasMany\"},{\"from\":\"outlet_btns\",\"to\":\"atms\",\"fromText\":\"1..*\\nHas Many\",\"toText\":\"\",\"fromPort\":\"id\",\"toPort\":\"outlet_btn_id\",\"type\":\"HasMany\"},{\"from\":\"penilaian_item_atms\",\"to\":\"item_atms\",\"fromText\":\"1..1\\nBelongs To\",\"toText\":\"\",\"fromPort\":\"itematm_id\",\"toPort\":\"id\",\"type\":\"BelongsTo\"},{\"from\":\"penilaian_item_outlets\",\"to\":\"item_outlets\",\"fromText\":\"1..1\\nBelongs To\",\"toText\":\"\",\"fromPort\":\"itemoutlet_id\",\"toPort\":\"id\",\"type\":\"BelongsTo\"},{\"from\":\"users\",\"to\":\"kantor_cabangs\",\"fromText\":\"1..1\\nBelongs To\",\"toText\":\"\",\"fromPort\":\"kantor_cabang_id\",\"toPort\":\"id\",\"type\":\"BelongsTo\"},{\"from\":\"users\",\"to\":\"personal_access_tokens\",\"fromText\":null,\"toText\":null,\"fromPort\":\"id\",\"toPort\":\"tokenable_id\",\"type\":\"MorphMany\"},{\"from\":\"users\",\"to\":\"notifications\",\"fromText\":null,\"toText\":null,\"fromPort\":\"id\",\"toPort\":\"notifiable_id\",\"type\":\"MorphMany\"},{\"from\":\"users\",\"to\":\"notifications\",\"fromText\":null,\"toText\":null,\"fromPort\":\"id\",\"toPort\":\"notifiable_id\",\"type\":\"MorphMany\"},{\"from\":\"users\",\"to\":\"notifications\",\"fromText\":null,\"toText\":null,\"fromPort\":\"id\",\"toPort\":\"notifiable_id\",\"type\":\"MorphMany\"}],\"node_data\":[{\"key\":\"atms\",\"schema\":[{\"name\":\"id\",\"isKey\":true,\"figure\":\"Hexagon\",\"color\":\"#be4b15\",\"info\":\"\"},{\"name\":\"atm_location\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"atm_deadline\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"atm_note\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"atm_status\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"kantor_cabang_id\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"outlet_id\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"}]},{\"key\":\"item_atms\",\"schema\":[{\"name\":\"id\",\"isKey\":true,\"figure\":\"Hexagon\",\"color\":\"#be4b15\",\"info\":\"\"},{\"name\":\"itematm_name\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"itematm_note\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"atm_id\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"}]},{\"key\":\"item_outlets\",\"schema\":[{\"name\":\"id\",\"isKey\":true,\"figure\":\"Hexagon\",\"color\":\"#be4b15\",\"info\":\"\"},{\"name\":\"itemoutlet_name\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"itemoutlet_note\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"outlet_id\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"}]},{\"key\":\"kantor_cabangs\",\"schema\":[{\"name\":\"id\",\"isKey\":true,\"figure\":\"Hexagon\",\"color\":\"#be4b15\",\"info\":\"\"},{\"name\":\"kantor_cabang_name\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"kantor_cabang_location\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"}]},{\"key\":\"outlet_btns\",\"schema\":[{\"name\":\"id\",\"isKey\":true,\"figure\":\"Hexagon\",\"color\":\"#be4b15\",\"info\":\"\"},{\"name\":\"outlet_name\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"outlet_location\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"outlet_deadline\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"outlet_note\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"outlet_status\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"kantor_cabang_id\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"}]},{\"key\":\"penilaian_item_atms\",\"schema\":[{\"name\":\"id\",\"isKey\":true,\"figure\":\"Hexagon\",\"color\":\"#be4b15\",\"info\":\"\"},{\"name\":\"penilaianitematm_name\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"penilaianitematm_score\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"penilaianitematm_gambar\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"itematm_id\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"}]},{\"key\":\"penilaian_item_outlets\",\"schema\":[{\"name\":\"id\",\"isKey\":true,\"figure\":\"Hexagon\",\"color\":\"#be4b15\",\"info\":\"\"},{\"name\":\"penilaianitemoutlet_name\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"penilaianitemoutlet_score\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"penilaianitemoutlet_gambar\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"itemoutlet_id\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"}]},{\"key\":\"users\",\"schema\":[{\"name\":\"id\",\"isKey\":true,\"figure\":\"Hexagon\",\"color\":\"#be4b15\",\"info\":\"\"},{\"name\":\"user_name\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"user_email\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"email_verified_at\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"password\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"role\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"remember_token\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"created_at\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"updated_at\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"},{\"name\":\"kantor_cabang_id\",\"isKey\":false,\"figure\":\"Decision\",\"color\":\"#6ea5f8\",\"info\":\"\"}]}]}"
docs = JSON.parse(docs)
nodeDataArray = docs.node_data
linkDataArray = docs.link_data


window.addEventListener('DOMContentLoaded', init);

      </script>
   </body>
</html>
 