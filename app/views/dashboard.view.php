<?php $this->view('header',$data) ?>


    

    <section class="section dashboard" style="margin-top: 3.5rem">
      <div class="row col-lg-10 m-auto">
        <div class="row">

        <div class="col-xxl-6 col-sm-12 m-auto">
            <div class="card">
              <div class="card-body">
                  <h3 class="card-title"><i class="bi bi-server text-nfdi" style="font-size:30px"></i> CKAN 1153</h3>
                    <!-- Active Table -->
                    <table class="table table-hover" style="--bs-table-hover-color: #009cbd;">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="fw-600">Triples</td>
                          <td><?=tripleGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Subjects</td>
                          <td><?=subjecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Predicates</td>
                          <td><?=predicateGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Objects</td>
                          <td><?=objecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query")?></td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <!-- End Tables without borders -->
                    <div>
                      <a href="<?=ROOT?>/home/ckan1153">
                        <button type="button" class="btn btn-nfdi m-1">SPARQL CKAN 1153</button>
                      </a>
                      <a href="<?=ROOT?>/home/ckan1153table">
                        <button type="button" class="btn btn-nfdi m-1">Search Tabels</button>
                      </a>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-6 col-sm-12 m-auto">
            <div class="card">
              <div class="card-body">
                  <h3 class="card-title"><i class="bi bi-server text-nfdi" style="font-size:30px"></i> CKAN 1368</h3>
                    <!-- Active Table -->
                    <table class="table table-hover" style="--bs-table-hover-color: #009cbd;">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="fw-600">Triples</td>
                          <td><?=tripleGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Subjects</td>
                          <td><?=subjecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Predicates</td>
                          <td><?=predicateGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Objects</td>
                          <td><?=objecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query")?></td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <!-- End Tables without borders -->
                    <div>
                      <a href="<?=ROOT?>/home/ckan1368">
                        <button type="button" class="btn btn-nfdi m-1">SPARQL CKAN 1368</button>
                      </a>
                      <a href="<?=ROOT?>/home/ckan1368table">
                        <button type="button" class="btn btn-nfdi m-1">Search Tabels</button>
                      </a>
                    </div>
                </div>
              </div>
            </div>

       
            <div class="col-xxl-6 col-sm-12 m-auto">
            <div class="card">
              <div class="card-body">
                  <h3 class="card-title"><i class="bi bi-server text-nfdi" style="font-size:30px"></i> SMW 1153</h3>
                    <!-- Active Table -->
                    <table class="table table-hover" style="--bs-table-hover-color: #009cbd;">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="fw-600">Triples</td>
                          <td><?=tripleGetter("https://service.tib.eu/lablsk-sparql/fuseki/smw1153/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Subjects</td>
                          <td><?=subjecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/smw1153/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Predicates</td>
                          <td><?=predicateGetter("https://service.tib.eu/lablsk-sparql/fuseki/smw1153/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Objects</td>
                          <td><?=objecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/smw1153/query")?></td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <!-- End Tables without borders -->
                    <div>
                      <a href="<?=ROOT?>/home/smw1153">
                        <button type="button" class="btn btn-nfdi m-1">SPARQL SMW 1153</button>
                      </a>
                      <a href="<?=ROOT?>/home/smw1153table">
                        <button type="button" class="btn btn-nfdi m-1">Search Tabels</button>
                      </a>
                    </div>
                </div>
              </div>
            </div>


            <div class="col-xxl-6 col-sm-12 m-auto">
            <div class="card">
              <div class="card-body">
                  <h3 class="card-title"><i class="bi bi-server text-nfdi" style="font-size:30px"></i> SMW 1368</h3>
                    <!-- Active Table -->
                    <table class="table table-hover" style="--bs-table-hover-color: #009cbd;">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="fw-600">Triples</td>
                          <td><?=tripleGetter("https://service.tib.eu/lablsk-sparql/fuseki/smw1368/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Subjects</td>
                          <td><?=subjecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/smw1368/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Predicates</td>
                          <td><?=predicateGetter("https://service.tib.eu/lablsk-sparql/fuseki/smw1368/query")?></td>
                        </tr>
                        <tr>
                          <td class="fw-600">Objects</td>
                          <td><?=objecteGetter("https://service.tib.eu/lablsk-sparql/fuseki/smw1368/query")?></td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <!-- End Tables without borders -->
                    <div>
                      <a href="<?=ROOT?>/home/smw1368">
                        <button type="button" class="btn btn-nfdi m-1">SPARQL SMW 1368</button>
                      </a>
                      <a href="<?=ROOT?>/home/smw1368table">
                        <button type="button" class="btn btn-nfdi m-1">Search Tabels</button>
                      </a>
                    </div>
                </div>
              </div>
            </div>


            <!-- Query Card 
            <div class="col-12 m-auto">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>
                  <div id="c681" class="ce html default-frame spacer-after-120 col-12">
                    <div id="yasgui"></div>
                      <script>
                         var prefix =  "PREFIX adms: <http://www.w3.org/ns/adms#>\n" +
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

                    var default_query = prefix + 
                        "SELECT ?Distribution ?Description ?Title ?Format ?Media_Type ?Acssess_URL WHERE { \n"+
                        "?Dataset a dcat:Dataset .\n"+
                        "?Dataset dct:description ?Description ;\n"+
                        "dct:title ?Title ;\n"+
                        "dct:issued ?Issued ;\n"+
                        "dct:publisher ?Publisher ;\n"+
                        "dcat:distribution ?Distribution ;\n"+
                        "} LIMIT 100";

                        // Set up the Yasgui editor
                        const yasgui = new Yasgui(document.getElementById("yasgui"), {
                          requestConfig: {
                            endpoint: "https://service.tib.eu/lablsk-sparql/fuseki/#/dataset/ckan1153/query",
                            headers: {
                                Authorization: "Basic " + btoa("admin:NFDI4ChemFuseki")
                              }
                            },
                              copyEndpointOnNewTab: false,
                              yasqe: { value: default_query},
                            });
                            
                      </script>
                      <script type="text/javascript">
                          var _paq = _paq || [];
                          _paq.push(["trackPageView"]);
                          _paq.push(["enableLinkTracking"]);
                      </script>
                  </div> 
                </div>
              </div>
            </div>
            -->

          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>


  <?php $this->view('footer',$data) ?>