<?php $this->view('header',$data) ?>
<div class="pagetitle">
    <h1>CKAN1368</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=ROOT?>">Datasets</a></li>
            <li class="breadcrumb-item active">CKAN1368</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
    <div class="row col-lg-11 m-auto">
        <div class="row">
            <!-- All Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-code"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?=tripleGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query")?></h6>
                                <span class="text-muted small pt-2 ps-1">Triples</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Triples Card -->
            <!-- Subjects Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-calendar3"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?=subjecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query")?></h6>
                                <span class="text-muted small pt-2 ps-1">Subjects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Subjects Card -->
            <!-- Predicates Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-stack"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?=predicateGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query")?></h6>
                                <span class="text-muted small pt-2 ps-1">Predicates</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Predicates Card -->
            <!-- Objects Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-calendar3"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?=objecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query")?></h6>
                                <span class="text-muted small pt-2 ps-1">Objects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Objects Card -->
        </div>
        <!-- Query Editor columns -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-xxl-8 col-md-6 my-1">
                    <button type="button" class="btn btn-nfdi" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                        <i class="bi bi-folder2-open mx-1"></i> Ready to use Queries </button>
                    <div class="modal fade" id="modalDialogScrollable" tabindex="-1" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ready to use Queries</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group">
                                        <li data-bs-dismiss="modal" class="list-group-item"><button onclick="addNewTab(query_2)" type="button" class="btn btn-modal text-start"><i class="bi bi-box-arrow-down me-1 text-nfdi"></i>Get some Details of Datasets on CKAN1153 such as Datsaset, Description, Title, Date of issue, Publisher, The distribution, And limit results to 100</button></li>
                                        <li data-bs-dismiss="modal" class="list-group-item"><button onclick="addNewTab(query_3)" type="button" class="btn btn-modal text-start"><i class="bi bi-box-arrow-down me-1 text-nfdi"></i>Get some Details of Datasets Distribution such as Distribution, Description, Title, Format, Media Type, Access URL, Filter results by Format And limit results to 100.</button></li>
                                        <li data-bs-dismiss="modal" class="list-group-item"><button onclick="addNewTab(query_4)" type="button" class="btn btn-modal text-start"><i class="bi bi-box-arrow-down me-1 text-nfdi"></i>Showing Dataset along with linked distribution such as Dataset, Dataset Title, Distribution, Distribution Title, And limit results to 100.</button></li>
                                        <li data-bs-dismiss="modal" class="list-group-item"><button onclick="addNewTab(query_5)" type="button" class="btn btn-modal text-start"><i class="bi bi-box-arrow-down me-1 text-nfdi"></i>How many distributions in each dataset? Descending Order</button></li>
                                        <li data-bs-dismiss="modal" class="list-group-item"><button onclick="addNewTab(query_5)" type="button" class="btn btn-modal text-start"><i class="bi bi-box-arrow-down me-1 text-nfdi"></i>How many distributions in each dataset? Descending Order</button></li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-nfdi" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Modal Dialog Scrollable-->
                    <a href="<?=ROOT?>/sparql">
                        <button class="btn btn-nfdi my-3">Generate a SPARQL Query</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-11">
            <div class="row">
                <!-- Query Card -->
                <div class="col-12 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datasets <span>/Ckan</span></h5>
                            <textarea id="query"></textarea>
                            <br>
                            <div class="text-center">
                                <button onclick="submitQuery()" class="btn btn-nfdi">Submit</button>
                                <button onclick="resetTab()" class="btn btn-secondary">Reset</button>
                            </div>
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var prefix = "PREFIX adms: <http://www.w3.org/ns/adms#>\n" + "PREFIX dcat: <http://www.w3.org/ns/dcat#>\n" + "PREFIX dct: <http://purl.org/dc/terms/>\n" + "PREFIX foaf: <http://xmlns.com/foaf/0.1/>\n" + "PREFIX gsp: <http://www.opengis.net/ont/geosparql#>\n" + "PREFIX hydra: <http://www.w3.org/ns/hydra/core#>\n" + "PREFIX locn: <http://www.w3.org/ns/locn#>\n" + "PREFIX owl: <http://www.w3.org/2002/07/owl#>\n" + "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>\n" + "PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>\n" + "PREFIX schema: <http://schema.org/>\n" + "PREFIX skos: <http://www.w3.org/2004/02/skos/core#>\n" + "PREFIX spdx: <http://spdx.org/rdf/terms#>\n" + "PREFIX time: <http://www.w3.org/2006/time>\n" + "PREFIX vcard: <http://www.w3.org/2006/vcard/ns#>\n" + "PREFIX xml: <http://www.w3.org/XML/1998/namespace>\n" + "PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>\n";
            var query_1 = prefix + "SELECT ?Distribution ?Description ?Title WHERE { \n" + "?Dataset a dcat:Dataset .\n" + "?Dataset dct:description ?Description ;\n" + "dct:title ?Title ;\n" + "dct:issued ?Issued ;\n" + "dct:publisher ?Publisher ;\n" + "dcat:distribution ?Distribution ;\n" + "} LIMIT 100";
            var query_2 = prefix + "SELECT ?Dataset ?Description ?Title ?Issued ?Publisher ?Distribution WHERE{ \n" + "?Distribution a dcat:Distribution .\n" + "?Distribution dct:description ?Description;\n" + "dct:title ?Title ;\n" + "dct:format ?Format ;\n" + "dcat:mediaType ?Media_Type;\n" + "dcat:accessURL ?Acssess_URL;\n" + "FILTER (?Format = 'PDF').\n" + "} LIMIT 100";
            var query_3 = prefix + "SELECT ?Dataset ?Title  ?Distribution ?D_Title WHERE { \n" + "?Dataset a dcat:Dataset .\n" + "?Dataset dct:title ?Title ;\n" + "          dcat:distribution ?Distribution .\n" + "?Distribution dct:title ?D_Title.\n" + "} LIMIT 100";
            var query_4 = prefix + "SELECT ?Dataset (COUNT(?Distribution) AS ?Distributions) WHERE { \n" + "?Dataset a dcat:Dataset .\n" + "?Dataset dcat:distribution ?Distribution .\n" + "} GROUP BY ?Dataset\n" + "ORDER BY DESC (?Distributions)";
            var query_5 = prefix + "SELECT ?Dataset (COUNT(?Distribution) AS ?Distributions) WHERE { \n" + "?Dataset a dcat:Dataset .\n" + "?Dataset dcat:distribution ?Distribution .\n" + "} GROUP BY ?Dataset\n" + "HAVING (COUNT (?Distribution) >= 10)\n" + "ORDER BY ASC (?Distributions)";
            // Initialize CodeMirror editor on the query textarea
            var editor = CodeMirror.fromTextArea(document.getElementById("query"), {
                mode: "application/sparql-query",
                //theme: "material",
                matchBrackets: true,
                lineNumbers: true,
                //tabSize: 2,
                //matchBrackets: true
            });
            editor.setValue(query_1);

            function submitQuery() {
                var query = editor.getValue();
                //var query = document.getElementById("query").value;
                var url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query";
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
                        pageLength: 10,
                        lengthMenu: [ 10, 15, 25, 50, 75, 100 ],
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
                        dom: 'Blfrtip',
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
                        responsive: true
                    });
                });
            }

            function addNewTab(query) {
                editor.setValue(query);
            }

            function resetTab() {
                editor.setValue("");
            }
        </script>


</section> <?php $this->view('footer',$data) ?>