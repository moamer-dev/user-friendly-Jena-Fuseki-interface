  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?=ROOT?>">
          <i class="bi bi-grid"></i>
          <span>Main</span>
        </a>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#datasest-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-search"></i><span>Datasets</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="datasest-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?=ROOT?>/home/ckan1153" class="text-decoration-none">
              <i class="bi bi-server" style="font-size:12px"></i><span>CKAN 1153</span>
            </a>
          </li>
          <li>
            <a href="<?=ROOT?>/home/ckan1368" class="text-decoration-none">
              <i class="bi bi-server" style="font-size:12px" ></i><span>CKAN 1368</span>
            </a>
          </li>
          <li>
            <a href="<?=ROOT?>/home/smw1153" class="text-decoration-none">
              <i class="bi bi-server" style="font-size:12px"></i><span>SMW 1153</span>
            </a>
          </li>
          <li>
            <a href="<?=ROOT?>/home/smw1368" class="text-decoration-none">
              <i class="bi bi-server" style="font-size:12px"></i><span>SMW 1368</span>
            </a>
          </li>
          
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-table"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?=ROOT?>/home/ckan1153table" class="text-decoration-none">
              <i class="bi bi-server" style="font-size:12px"></i><span>CKAN 1153</span>
            </a>
          </li>
          <li>
            <a href="<?=ROOT?>/home/ckan1368table" class="text-decoration-none">
              <i class="bi bi-server" style="font-size:12px"></i><span>CKAN 1368</span>
            </a>
          </li>
          <li>
            <a href="<?=ROOT?>/home/smw1153table" class="text-decoration-none">
              <i class="bi bi-server" style="font-size:12px"></i><span>SMW 1153</span>
            </a>
          </li>
          <li>
            <a href="<?=ROOT?>/home/smw1368table" class="text-decoration-none">
              <i class="bi bi-server" style="font-size:12px"></i><span>SMW 1368</span>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=ROOT?>/sparql">
          <i class="bi bi-braces"></i>
          <span>Generate a SPARQL Query</span>
        </a>
      </li>



      <li class="nav-heading">Extras</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#nfdi-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>NFDI4Chem</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="nfdi-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="https://www.nfdi4chem.de/" target="_blank" class="text-decoration-none">
              <i class="bi bi-circle" style="font-size:8px"></i><span>Main Website</span>
            </a>
          </li>
          <li>
            <a href="https://www.nfdi4chem.de/index.php/frequently-asked-questions/" target="_blank" class="text-decoration-none">
              <i class="bi bi-circle" style="font-size:8px"></i><span>FAQ</span>
            </a>
          </li>
          <li>
            <a href="https://www.nfdi4chem.de/index.php/helpdesk/" target="_blank" class="text-decoration-none">
              <i class="bi bi-circle" style="font-size:8px"></i><span>Helpdesk</span>
            </a>
          </li>
          <li>
            <a href="https://knowledgebase.nfdi4chem.de/knowledge_base/" target="_blank" class="text-decoration-none">
              <i class="bi bi-circle" style="font-size:8px"></i><span>Knowledge Base</span>
            </a>
          </li>
          <li>
            <a href="https://search.nfdi4chem.de/" target="_blank" class="text-decoration-none">
              <i class="bi bi-circle" style="font-size:8px"></i><span>Search Service</span>
            </a>
          </li>
          <li>
            <a href="https://github.com/NFDI4Chem" target="_blank" class="text-decoration-none">
              <i class="bi bi-circle" style="font-size:8px"></i><span>GitHub repository</span>
            </a>
          </li>
          
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="https://terminology.nfdi4chem.de/ts/" target="_blank">
          <i class="bi bi-diagram-3"></i>
          <span>Terminology Service</span>
        </a>
      </li>

      
    </ul>

  </aside>