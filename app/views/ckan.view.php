<?php $this->view('header',$data) ?>


    <div class="pagetitle">
      <h1>CKAN1153</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=ROOT?>">Datasets</a></li>
          <li class="breadcrumb-item active">CKAN1153</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
      <section class="section dashboard">
        <div class="row col-lg-10 m-auto">

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
                            <h6><?=triples_ckan1153()?></h6>
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
                            <h6><?=subjects_ckan1153()?></h6>
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
                                  <h6><?=predicates_ckan1153()?></h6>
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
                            <h6><?=objects_ckan1153()?></h6>
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
              <!-- Query Card -->
              <div class="col-12 m-auto">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Datasets <span>/Ckan</span></h5>
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

                    var query_1 = prefix + 
                        "SELECT ?Distribution ?Description ?Title ?Format ?Media_Type ?Acssess_URL WHERE { \n"+
                        "?Dataset a dcat:Dataset .\n"+
                        "?Dataset dct:description ?Description ;\n"+
                        "dct:title ?Title ;\n"+
                        "dct:issued ?Issued ;\n"+
                        "dct:publisher ?Publisher ;\n"+
                        "dcat:distribution ?Distribution ;\n"+
                        "} LIMIT 100";

                    var query_2 = prefix + 
                        "SELECT ?Dataset ?Description ?Title ?Issued ?Publisher ?Distribution WHERE{ \n"+
                        "?Distribution a dcat:Distribution .\n"+
                        "?Distribution dct:description ?Description;\n"+
                        "dct:title ?Title ;\n"+
                        "dct:format ?Format ;\n"+
                        "dcat:mediaType ?Media_Type;\n"+
                        "dcat:accessURL ?Acssess_URL;\n"+
                        "FILTER (?Format = 'PDF').\n"+
                        "} LIMIT 100";

                    var query_3 = prefix + 
                        "SELECT ?Dataset ?Title  ?Distribution ?D_Title WHERE { \n"+
                        "?Dataset a dcat:Dataset .\n"+
                        "?Dataset dct:title ?Title ;\n"+
                        "          dcat:distribution ?Distribution .\n"+
                        "?Distribution dct:title ?D_Title.\n"+
                        "} LIMIT 100";
                    
                    var query_4 = prefix + 
                        "SELECT ?Dataset (COUNT(?Distribution) AS ?Distributions) WHERE { \n"+
                        "?Dataset a dcat:Dataset .\n"+
                        "?Dataset dcat:distribution ?Distribution .\n"+
                        "} GROUP BY ?Dataset\n"+
                        "ORDER BY DESC (?Distributions)";

                    var query_5 = prefix + 
                        "SELECT ?Dataset (COUNT(?Distribution) AS ?Distributions) WHERE { \n"+
                        "?Dataset a dcat:Dataset .\n"+
                        "?Dataset dcat:distribution ?Distribution .\n"+
                        "} GROUP BY ?Dataset\n"+
                        "HAVING (COUNT (?Distribution) >= 10)\n"+
                        "ORDER BY ASC (?Distributions)";
                
                    const username = "#";
                    const password = "#";
                    const yasgui = new Yasgui(document.getElementById("yasgui"), {
                      requestConfig: {
                         endpoint: "https://sparql11.test.service.tib.eu/fuseki/#/dataset/ckan1153/query",
                       },
                      copyEndpointOnNewTab: false,
                      yasqe: { value: query_1 },
                    }); 
              
                    function addNewTab(query) {
                      const activeTab = yasgui.getTab();
                      const yasqe = activeTab.yasqe;
                      yasqe.setValue(query);
                      }
                      
                </script>

                <script type="text/javascript">
                    var _paq = _paq || [];
                    _paq.push(["trackPageView"]);
                    _paq.push(["enableLinkTracking"]);
                  </script>
                </div> 
              </div>
            </div>
          </div><!-- End Left side columns -->
            </div>
          </div><!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">
            <!-- Example Queries -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Example Queries</h5>

                <!-- Accordion -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      <i class="bi bi-file-code mx-1"></i> Get some Details of Datasets
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Get some Details of Datasets on CKAN1153 such as <code>Datsaset,</code> <code>Description,</code> <code>Title,</code> <code>Date of issue,</code> <code>Publisher,</code> <code>The distribution,</code> And limit results to 100</div>
                      <button onclick="addNewTab(query_1)" class="btn btn-nfdi my-3">Apply this query</button>    
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                      <i class="bi bi-file-code mx-1"></i> Get some Details of Datasets Distribution
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Get some Details of Datasets Distribution such as <code>Distribution,</code> <code>Description,</code> <code>Title,</code> <code>Format,</code> <code>Media Type,</code> <code>Access URL,</code> Filter results by Format And limit results to 100.</div> 
                      <button onclick="addNewTab(query_2)" class="btn btn-nfdi my-3">Apply this query</button>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header lh-5" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                      <i class="bi bi-file-code mx-1"></i> Showing Dataset along with linked distribution
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Showing Dataset along with linked distribution such as <code>Dataset,</code> <code>Dataset Title,</code> <code>Distribution,</code> <code>Distribution Title,</code> And limit results to 100.</div> 
                      <button onclick="addNewTab(query_3)" class="btn btn-nfdi my-3">Apply this query</button>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                      <i class="bi bi-file-code mx-1"></i> Showing distributions statistics
                      </button>
                    </h2>
                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">How many distributions in each dataset? Descending Order</div> 
                      <button onclick="addNewTab(query_4)" class="btn btn-nfdi my-3">Apply this query</button>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                      <i class="bi bi-file-code mx-1"></i> Showing datasets statistics
                      </button>
                    </h2>
                    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Show only Datasets that have distributions equal to or greater than 10 </div> 
                      <button onclick="addNewTab(query_5)" class="btn btn-nfdi my-3">Apply this query</button>
                    </div>
                  </div>

                  </div>
                </div><!-- End Accordion -->
                <button type="button" class="btn btn-nfdi" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                <i class="bi bi-folder2-open mx-1"></i> More Example Queries
              </button>
              <div class="modal fade" id="modalDialogScrollable" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">More Example Queries</h5>
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
              </div>
            
               <!-- Generate a SPARQL Query -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">(or) Generate a SPARQL Query</h5>
                <p>If you are interested in more queries, you can generate a custom query based on your preferences</p>
                <a href="<?=ROOT?>/sparql">
                  <button class="btn btn-nfdi my-3">Generate a SPARQL Query</button>
                </a>
              </div> 
            </div>  
          </div><!-- End Generate a SPARQL Query -->


            

          </div><!-- End Right side columns -->
        </div> 
      </section>

<?php $this->view('footer',$data) ?>
