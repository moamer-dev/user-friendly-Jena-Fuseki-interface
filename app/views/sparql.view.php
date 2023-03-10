<?php $this->view('header',$data) ?>



    <div class="pagetitle">
      <h1>Generate a Query</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=ROOT?>">Main</a></li>
          <li class="breadcrumb-item active">Generate Query</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row col-lg-12 m-auto">

            <!-- Main columns -->
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <!-- Custom query form -->
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Select Query elements to build up the statement for you</h5>
                                <form class="row g-3">

                                    <div class="col-12 ">
                                        <label for="endpoint" class="form-label text-muted">Select an Endpoint</label>
                                        <select id="endpoint" class="form-select">
                                            <option selected disabled value>Select a dataset to query against</option>
                                            <option value="https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query">CKAN1153</option>
                                            <option value="https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query">CKAN1368</option>
                                            <option value="https://service.tib.eu/lablsk-sparql/fuseki/smw1153/query">SMW1153</option>
                                            <option value="https://service.tib.eu/lablsk-sparql/fuseki/smw1368/query">SMW1368</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="subject_1" class="form-label text-muted">Select a subject</label>
                                        <select id="subject_1" class="form-select">
                                            <option selected disabled value>Select a subject</option>
                                            <option value="?Dataset">Dataset</option>
                                            <option value="?Distribution">Distribution</option>
                                        </select>
                                        </div>

                                    <div class="col-md-4">
                                        <label for="predicate_1" class="form-label text-muted">Select a predicate</label>
                                        <select id="predicate_1" class="form-select">
                                            <option selected disabled value>Select a predicate</option>
                                            <option value=" ?Dataset dct:title ?Title ;">has a title</option>
                                            <option value=" dct:description ?Description ;">has a description</option>
                                            <option value="           dcat:distribution ?Distribution .">has a distribution</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="limit" class="form-label text-muted">Limit the number of results to</label>
                                        <input type="number" class="form-control" id="limit" value="100" required="">
                                    </div>

                                    <div class="col-md-4">
                                        
                                        <select id="subject_2" class="form-select">
                                            <option selected disabled value>and</option>
                                            <option value="?Dataset">Dataset</option>
                                            <option value="?Distribution">Distribution</option>
                                        </select>
                                        </div>

                                    <div class="col-md-4">
                                        
                                        <select id="predicate_2" class="form-select">
                                            <option selected disabled value>and</option>
                                            <option value=" ?Dataset dct:title ?Title ;">has a title</option>
                                            <option value=" dct:description ?Description ;">has a description</option>
                                            <option value="           dcat:distribution ?Distribution .">has a distribution</option>
                                        </select>
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <select id="order" class="form-select">
                                            <option selected disabled value>Ordered by</option>
                                            <option value="ORDERED BY" >Dataset</option>
                                        </select>
                                    </div>

                                    
                                    <div class="text-center">
                                        <button  type="submit" class="btn btn-nfdi" style="width:25%">Create</button>
                                        <button type="reset" class="btn btn-secondary" style="width:25%">Reset</button>
                                        <a href="https://wiki.tib.eu/confluence/display/sfbinf/Example+Queries+against+Ckan1368+on+Jena+Fuseki+SPARQL+Endpoint" target="_blank">
                                        <button class="btn btn-nfdi" type="button" style="width:25%">More Explained Queries</button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End custom query form -->
                
                    <!-- Custom query form -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Reports <span>/Today</span></h5>
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
                    </div><!-- End custom query form -->
                </div>
                
            </div><!-- Closing Main column -->

        </div><!-- Closing Main row -->

    </section>
    
    <script>
        var prefix = "PREFIX adms: <http://www.w3.org/ns/adms#>\n" + "PREFIX dcat: <http://www.w3.org/ns/dcat#>\n" + "PREFIX dct: <http://purl.org/dc/terms/>\n" + "PREFIX foaf: <http://xmlns.com/foaf/0.1/>\n" + "PREFIX gsp: <http://www.opengis.net/ont/geosparql#>\n" + "PREFIX hydra: <http://www.w3.org/ns/hydra/core#>\n" + "PREFIX locn: <http://www.w3.org/ns/locn#>\n" + "PREFIX owl: <http://www.w3.org/2002/07/owl#>\n" + "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>\n" + "PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>\n" + "PREFIX schema: <http://schema.org/>\n" + "PREFIX skos: <http://www.w3.org/2004/02/skos/core#>\n" + "PREFIX spdx: <http://spdx.org/rdf/terms#>\n" + "PREFIX time: <http://www.w3.org/2006/time>\n" + "PREFIX vcard: <http://www.w3.org/2006/vcard/ns#>\n" + "PREFIX xml: <http://www.w3.org/XML/1998/namespace>\n" + "PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>\n";
        var query_1 = prefix + "SELECT ?Distribution ?Description ?Title WHERE { \n" + "?Dataset a dcat:Dataset .\n" + "?Dataset dct:description ?Description ;\n" + "dct:title ?Title ;\n" + "dct:issued ?Issued ;\n" + "dct:publisher ?Publisher ;\n" + "dcat:distribution ?Distribution ;\n" + "} LIMIT 100";
        
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
            const form = document.querySelector('.row.g-3');
            var query = editor.getValue();
            var url = form.querySelector('#endpoint').value;
            //console.log(query);
            //console.log(url);
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
                    dom: 'Blfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
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


    <script>
        // Get a reference to the form and button
        const form = document.querySelector('.row.g-3');
        const button = form.querySelector('button[type="submit"]');
        // Add an event listener to the button
        button.addEventListener('click', function(event) {
        event.preventDefault(); // prevent form submission
        const endpoint = form.querySelector('#endpoint').value;
        const subject_1 = form.querySelector('#subject_1').value;
        const subject_2 = form.querySelector('#subject_2').value;
        const predicate_1 = form.querySelector('#predicate_1').value;                                   
        const predicate_2 = form.querySelector('#predicate_2').value;
        const limit = form.querySelector('#limit').value;


        const prefix = "PREFIX adms: <http://www.w3.org/ns/adms#>\n" +
                        "PREFIX dcat: <http://www.w3.org/ns/dcat#>\n" +
                        "PREFIX dct: <http://purl.org/dc/terms/>\n" +
                        "PREFIX foaf: <http://xmlns.com/foaf/0.1/>\n" +
                        "PREFIX gsp: <http://www.opengis.net/ont/geosparql#>\n" +
                        "PREFIX hydra: <http://www.w3.org/ns/hydra/core#>\n" +
                        "PREFIX locn: <http://www.w3.org/ns/locn#>\n" +
                        "PREFIX owl: <http://www.w3.org/2002/07/owl#>\n" +
                        "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>\n" +
                        "PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>\n" +
                        "PREFIX schema: <http://schema.org/>\n" +
                        "PREFIX skos: <http://www.w3.org/2004/02/skos/core#>\n" + 
                        "PREFIX spdx: <http://spdx.org/rdf/terms#>\n" +
                        "PREFIX time: <http://www.w3.org/2006/time>\n" + 
                        "PREFIX vcard: <http://www.w3.org/2006/vcard/ns#>\n" +
                        "PREFIX xml: <http://www.w3.org/XML/1998/namespace>\n" +
                        "PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>\n"
                        ;
        

        const options = //prefix + "\n" +
            "SELECT " + subject_1 + subject_2 + "\n" +
            "WHERE { " + predicate_1 + predicate_2 + " }\n" +
            "LIMIT " + limit;

        const query = prefix + options;
        editor.setValue(query);

        });

    </script>


    <script>
        // Get the select elements for subject_1 and subject_2
        var subject1 = document.getElementById("subject_1");
        var subject2 = document.getElementById("subject_2");

        // Get the select elements for predicate_1 and predicate_2
        var predicate1 = document.getElementById("predicate_1");
        var predicate2 = document.getElementById("predicate_2");

        // Disable subject_2 and predicate_2
        subject2.disabled = true;
        predicate2.disabled = true;

        // Add an event listener to subject_1
        subject1.addEventListener("change", function() {
            // Enable subject_2 when an option is selected in subject_1
            subject2.disabled = false;

            // Disable any options in subject_2 that match the selected option in subject_1
            for (var i = 0; i < subject2.options.length; i++) {
                if (subject2.options[i].value === subject1.value) {
                    subject2.options[i].disabled = true;
                } else {
                    subject2.options[i].disabled = false;
                }
            }
        });

        // Add an event listener to predicate_1
        predicate1.addEventListener("change", function() {
            // Enable predicate_2 when an option is selected in predicate_1
            predicate2.disabled = false;

            // Disable any options in predicate_2 that match the selected option in predicate_1
            for (var i = 0; i < predicate2.options.length; i++) {
                if (predicate2.options[i].value === predicate1.value) {
                    predicate2.options[i].disabled = true;
                } else {
                    predicate2.options[i].disabled = false;
                }
            }
        });

        // Add an event listener to subject_2
        subject2.addEventListener("change", function() {
            // Disable any options in subject_1 that match the selected option in subject_2
            for (var i = 0; i < subject1.options.length; i++) {
                if (subject1.options[i].value === subject2.value) {
                    subject1.options[i].disabled = true;
                } else {
                    subject1.options[i].disabled = false;
                }
            }
        });

        // Add an event listener to predicate_2
        predicate2.addEventListener("change", function() {
            // Disable any options in predicate_1 that match the selected option in predicate_2
            for (var i = 0; i < predicate1.options.length; i++) {
                if (predicate1.options[i].value === predicate2.value) {
                    predicate1.options[i].disabled = true;
                } else {
                    predicate1.options[i].disabled = false;
                }
            }
        });

    </script>





  <?php $this->view('footer',$data) ?>