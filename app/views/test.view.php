<?php $this->view('header',$data) ?>

<section class="section dashboard">
      <div class="row col-lg-10 m-auto">
        <div class="row">
            <div class="col-xxl-12 col-12 m-auto">
                <div class="card">
                    <div class="card-body">
                         <h3 class="card-title"><i class="bi bi-server text-nfdi" style="font-size:30px"></i> CKAN 1153</h3>
                            <textarea id="query" style=""></textarea>
                                <br>
                                <div class="text-center">
                                <button onclick="submitQuery()" class="btn btn-nfdi">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                                <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <script>

         // Initialize CodeMirror editor on the query textarea
         var editor = CodeMirror.fromTextArea(document.getElementById("query"), {
            mode: "application/sparql-query",
            //theme: "material",
            matchBrackets: true,
            lineNumbers: true,
            //tabSize: 2,
            //matchBrackets: true
        });

        function submitQuery() {
            var query = editor.getValue();
            //var query = document.getElementById("query").value;
            var url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query";

            // Create cURL request
            var xhr = new XMLHttpRequest();
            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            // Parse response as JSON and generate HTML table
            xhr.onreadystatechange = function () {
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
                $('#myTable').DataTable();
            });
        }
       
        
    </script>




<?php $this->view('footer',$data) ?>
