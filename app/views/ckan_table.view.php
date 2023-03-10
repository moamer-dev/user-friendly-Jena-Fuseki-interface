<?php $this->view('header',$data) ?>


<?php
// SPARQL query to retrieve all RDF triples
$query = "
SELECT ?subject ?predicate ?object
WHERE {
  ?subject ?predicate ?object
} LIMIT 300";

// Set the endpoint URL
$endpoint = 'https://nfdi4culture.de/sparql';

// Set the format to JSON
$format = 'application/sparql-results+json';

// Send a GET request to the endpoint with the query and format parameters
$url = $endpoint . '?query=' . urlencode($query) . '&format=' . urlencode($format);
$json = file_get_contents($url);

// Output the JSON data
echo '<script>var rdfData = ' . $json . ';</script>';
?>

<section class="section dashboard">
  <div class="col-lg-10 m-auto">
    <div class="row">
      <!-- Query Card -->
      <div class="col-12 m-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datasets <span>/Ckan / Table</span></h5>
            <!-- HTML table -->
            <table class="table table-hover display" id="rdfTable">
              <thead>
                <tr>
                  <th>Subject</th>
                  <th>Predicate</th>
                  <th>Object</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- JavaScript code to generate the table -->
<script>
// Parse the JSON data
var results = rdfData.results.bindings;
console.log(results);

// Get a reference to the table body
var tbody = document.getElementById('rdfTable').getElementsByTagName('tbody')[0];

// Loop through the results and generate table rows
for (var i = 0; i < results.length; i++) {
  var subject = results[i].subject.value;
  var predicate = results[i].predicate.value;
  var object = results[i].object.value;
  

  
  var row = document.createElement('tr');
  var subjectCell = document.createElement('td');
  subjectCell.classList.add('overflow-custom');
  var predicateCell = document.createElement('td');
  predicateCell.classList.add('overflow-custom');
  var objectCell = document.createElement('td');
  objectCell.classList.add('overflow-custom');

  subjectCell.appendChild(document.createTextNode(subject));
  predicateCell.appendChild(document.createTextNode(predicate));
  objectCell.appendChild(document.createTextNode(object));

  row.appendChild(subjectCell);
  row.appendChild(predicateCell);
  row.appendChild(objectCell);

  tbody.appendChild(row);
}



$(document).ready(function() {
  var table = $('#rdfTable').DataTable({
    pageLength: 15,
    lengthMenu: [ 10, 15, 25, 50, 75, 100 ],
    // Define the columns
    columns: [
      { data: 'Subject', title: 'Subject' },
      { data: 'Predicate', title: 'Predicate' },
      { data: 'Object', title: 'Object' }
    ],
    // Add search inputs for specific columns
    initComplete: function () {
      this.api().columns([0,1,2]).every(function () {
        var column = this;
        var header = $(column.header());
        var title = header.text().trim();
        header.html('<div class="input-group"><input type="text" class="form-control form-control-sm fw-bolder" placeholder="Search ' + title + '" /><div class="input-group-append"><button type="button" class="btn btn-sm btn-nfdi clear-search">Clear</button></div></div>');
        $('input', header).on('keyup change clear', function() {
          if (column.search() !== this.value) {
            column.search(this.value).draw();
          }
        });
        $('.clear-search', header).on('click', function() {
          $('input', header).val('').trigger('change');
        });
      });
    }
  });
});




</script>

<?php $this->view('footer',$data) ?>