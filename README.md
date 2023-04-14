# user-friendly-Jena-Fuseki-interface

Link to the project[https://fuseki.mohamedamer.dev/public/]

The usability of the Fuseki SPARQL endpoint user interface can be challenging for individuals with limited experience in SPARQL statement construction. Consequently, it is imperative to develop a user-friendly interface that enables users to execute SPARQL queries in a more seamless and dynamic manner. Several examples of SPARQL endpoint interfaces include: https://dbpedia.org/sparql, https://sbd4nanolandscape.rdf.bigcat-bioinformatics.org/, and https://nfdi4culture.de/resources/knowledge-graph.html#.

The primary objective is to create an interface with the following capabilities:

Facilitate querying against diverse datasets that are available.
Offer a set of pre-defined queries that can be readily applied by users to retrieve results.
Create an application that can generate a SPARQL statement from user inputs. The inputs are selected from managed lists that are designed to correspond to the different components of the SPARQL statement.

### App info
* Backend:
    * php: 7.3 +
    * MVC
* Frontend:
    * JS
    * Bootstrap 5
* Libraries:
    * [DataTables](https://datatables.net/examples/index)
    * [CodeMirror](https://codemirror.net/)
    * [dimplejs](http://dimplejs.org/)
    * [jsTree](https://www.jstree.com/)
 
 ### APP Functionalities

- Creation of a Statistical Dashboard that exhibits the statistics available in the datasets, such as the COUNT of triples, subjects, predicates, and objects for each dataset. Each dataset card features two buttons:
    - Sparql the Dataset: This button leads to a landing page includes a user-friendly interface where the user can execute a sparql query against the dataset.
    - Search Table: This button leads to a landing page that displays a table for all the available triples in the dataset, categorized as Subject, Predicate, and Object.
- Creation of a landing page for each dataset, which includes the following features:
    - A sparql query editor box that allows the user to enter a query and display the results in a managed table.
    - A ready-to-use query button that opens a modal with predefined queries, which the user can choose from and apply directly to the editor box.
    - A Generate a sparql query button that leads the user to a landing page with a form to generate a custom query based on their preferences.
- The query results are displayed in a managed table with the following capabilities:
    - Exporting the results in various formats, such as Excel, CSV, PDF, and JSON.
    - Hyperlinking all returned URLs.
    - Enabling the user to search through the results.
    - Limiting the number of entries.
    - Pagination.
- The query results can be visualized through dimplejs and jstree as: (So far it is applicable on CKAN1153 page only as a test)
    - Table
    - Line Chart
    - Bar Chart
    - Scatter chart
    - Area chart
    - Tree


## This Dashboard has the following features

* **Creation of a Statistical Dashboard that exhibits the statistics available in the datasets, such as the COUNT of triples, subjects, predicates, and objects for each dataset. Each dataset card features two buttons:**
  - Sparql the Dataset: This button leads to a landing page includes a user-friendly interface where the user can execute a sparql query against the dataset.
  - Search Table: This button leads to a landing page that displays a table for all the available triples in the dataset, categorized as Subject, Predicate, and Object.
  
* **Creation of a landing page for each dataset, which includes the following features:**
  - A sparql query editor box that allows the user to enter a query and display the results in a managed table.
  - A ready-to-use query button that opens a modal with predefined queries, which the user can choose from and apply directly to the editor box.
  - A Generate a sparql query button that leads the user to a landing page with a form to generate a custom query based on their preferences.
  
* **The query results are displayed in a managed table with the following capabilities:**
  - Exporting the results in various formats, such as Excel, CSV, PDF, and JSON.
  - Hyperlinking all returned URLs.
  - Enabling the user to search through the results.
  - Limiting the number of entries.
  - Pagination.

### Ongoing Developements
- Generating custom Queries based on user preferences. 
- Using human readable tags for the query statements.  
