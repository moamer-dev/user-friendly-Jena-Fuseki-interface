<?php $this->view('header',$data) ?>

<section class="section dashboard">
    <div class="=col-lg-11 m-auto"></div>
        <div class="row">
            <div class="col-12 m-auto">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Datasets <span>/Ckan1153</span></h5>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<script>

function submitQuery() {
                var query = "SELECT ?subject ?predicate ?object WHERE { ?subject ?predicate ?object }";
                //var query = document.getElementById("query").value;
                var url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query";
                // Create cURL request
                var xhr = new XMLHttpRequest();
                xhr.open("POST", url, true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Parse response as JSON and generate HTML table
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var json = JSON.parse(xhr.responseText);
                        generateTable(json);
                    }
                };
                // Send request with query parameter
                xhr.send("query=" + encodeURIComponent(query));
            }

            function generateTable(json) {
                // Extract the column names from the response
                var bindings = json['head']['vars'];
                var num_columns = bindings.length;
                // Generate the HTML table
                var html = "<table id='myTable' class=' table table-striped'>";
                html += "<thead><tr>";
                for (var i = 0; i < num_columns; i++) {
                    html += "<th>" + bindings[i] + "</th>";
                }
                html += "</tr></thead><tbody>";
                var results = json['results']['bindings'];
                for (var i = 0; i < results.length; i++) {
                    var result = results[i];
                    html += "<tr>";
                    for (var j = 0; j < num_columns; j++) {
                        var column_name = bindings[j];
                        if (result.hasOwnProperty(column_name)) {
                            var value = result[column_name]['value'];
                            html += "<td class='overflow-custom'>" + value + "</td>";
                        } else {
                            html += "<td></td>";
                        }
                    }
                    html += "</tr>";
                }
                html += "</tbody></table>";
                document.getElementById("result").innerHTML = html;
                // Apply DataTables to the table
                $(document).ready(function() {
                    $('#myTable').DataTable({
                        columnDefs: [ {
                        targets: '_all',
                        render: function ( data, type, row){
                            console.log("data = " + data);
                            if (data.startsWith("http://")){
                                return '<a href="'+data+'" target="_blank">'+data+'</a>';
                            }
                            else if (data.startsWith("https://")){
                                return '<a href="'+data+'" target="_blank">'+data+'</a>';
                            }
                            else{
                                return data;
                            }
                            
                        } 
                        } ],
                        dom: 'Blfrtip', //DOM elements https://datatables.net/reference/option/dom
                        buttons: [
                            'copyHtml5',
                            'excelHtml5',
                            'csvHtml5',
                            'pdfHtml5',
                            {
                            text: 'JSON',
                            action: function ( e, dt, button, config ) {
                                var data = dt.buttons.exportData();
            
                                $.fn.dataTable.fileSave(
                                    new Blob( [ JSON.stringify( data ) ] ),
                                    'Export.json'
                                );
                            }
                        }
                        ],
                        pageLength: 15,
                        lengthMenu: [ 10, 15, 20, 25, 50, 75, 100 ],
                        responsive: true
                        
                    });
                });
            }
            submitQuery();
        </script>



<?php $this->view('footer',$data) ?>