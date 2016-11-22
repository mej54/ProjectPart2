<!doctype HTML>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <title>Molly Johnson</title>
    <link rel="stylesheet" href="./CSS/projectstyle.css">
    <link href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css" rel="stylesheet" />


  </head>
  <body>

      <div class="header">
          <nav>
            <ul>
              <li id="mj">Molly Johnson</li>
              <li><a class="headlink" href="#aboutme">About Me</a></li>
              <li><a class="headlink" href="#education">Education</a></li>
              <li><a class="headlink" href="#research">Research</a></li>
              <li><a class="headlink" href="#files">Files</a></li>
              <li><a class="headlink" href="#contact">Contact</a></li>
            </ul>
          </nav>
      </div>

      <div class="content">
        <div id="aboutme" class="titles">
          <h2>About Me</h2>

          <div class="container">
            <div class="slider">
              <div><img id="road" src="./images/roadsign.jpg" alt="photograph of road" height=200 width=260 /></div>
              <div><img id="joshua" src="./images/joshuatree.jpg" alt="photograph of joshua tree" height=200 width=260 /></div>
              <div><img id="sunflower" src="./images/sunflower.jpg" alt="photograph of sunflower" height=200 width=260 /></div>
              <div><img id="badlands" src="./images/badlands.jpg" alt="photograph of Badlands" height=200 width=260 /></div>
              <div><img id="farmland" src="./images/farmland.jpg" alt="photograph of farmland" height=200 width=260 /></div>
              <div><img id="glacier" src="./images/glacier.jpg" alt="photograph of glacier national park" height=200 width=260 /></div>
              <div><img id="deathvalley" src="./images/nevada.jpg" alt="photograph of Death Valley" height=200 width=260 /></div>
            </div>
          </div>

          </br>
          
          <p>
            I am a senior bioinformatics major at the University of Pittsburgh, with a minor in chemistry.
          </p>

          <p>
            I am interested in applying my computational skills and molecular biology knowledge to solve the molecular mechanisms behind disease and contribute to the development of personalized medicine. Specifically, I am interested in classifying cancers and identifying potential targets for drug treatment. I have had experience in a range of biomedical informatics labs at the University of Pittsburgh, Carnegie Mellon University, and Mt. Sinai Icahn School of Medicine. 
          </p>

          <p>
            My main projects thus far have focused on identifying head and neck cancer subtypes based on the presence of Human Papillomavirus and genetic expression patterns, and looking at the structural features of mutations in the cancer landscape. Both projects have dealt with parsing and analyzing large datasets from The Cancer Genome Atlas and the Catalogue of Somatic Missense Mutations.
          </p>

          <p>
            Currently, I am working with Dr. James Pipas in the Department of Biological Sciences at the University of Pittsburgh. My current goal is to map known functional surface patches of Large T Antigen from oncogenic Simian Virus 40 onto similar proteins across different virus families in an attempt to identify regions of viral proteins with similar functions. 
          </p>

          <p>
            In my free time, I like to hike and explore the country via road trips (pictured above)!
          </p>

        </div>

        <hr/>  

        <div id="education" class="titles">
          <h2>Education</h2>

          <h3>University of Pittsburgh</h3>

          <p id="major">
            Major: Bioinformatics
            <br/>
            Minor: Chemistry
            <br/>
            Expected Graduation: April 2017
          </p>  

          <img id="pittcrest" src="./images/Pitt.png" alt="Pitt Crest" width=10% height=10%/>
          <br/>

          <p>
            <span id="coursework">Relevant Coursework</span>
            <br/>
            <br/>
            Molecular Biology | Metabolic Pathways &amp Regulation | Macromolecular Structure &amp Function
            <br/>
            Computational Biology | Genetics (Honors) | Virology | Microbiology
            <br/>
            Algorithm Implementation (Java) | Data Structures (Java) | Discrete Structures for Computer Science
            <br/>
            Applied Regression | Applied Statistical Methods
          </p>

        </div>

        <hr/>

        <div id="research" class="titles">
          <h2>Research</h2>

          <p>
            <span class="research_sub">Mount Sinai Icahn School of Medicine Summer Undergraduate Research Program</span>
            <br/>
            Department of Pharmacological Sciences | Principal Investigator: Dr. Avner Schlessinger
              <ul> 
                <li class="research_description">Parsed and validated tumor entries from the Catalogue of Somatic Mutations in Cancer (COSMIC), constructed mutational database, and analyzed protein structural features of ~500,000 mutations</li>
                <li class="research_description">Presented research to faculty and at Mount Sinai research symposium</li>
              </ul>
            <br/>

            <span class="research_sub">University of Pittsburgh Undergraduate Research</span>
            <br/>
            Department of Biological Sciences | Principal Investigator: Dr. James Pipas
              <ul>
                <li class="research_description">Identified novel subtypes of head &amp neck cancer based on genetic expression patterns and the presence of human papillomavirus (genomic/transcriptomic/proteomic data from The Cancer Genome Atlas)</li>
                <li class="research_description">Presented research in interdisciplinary setting and at University of Pittsburgh research symposium</li>
              </ul>
            <br/>

            <span class="research_sub">University of Pittsburgh School of Medicine Summer Undergraduate Research Program</span>
            <br/>
            Department of Pathology | Principal Investigator: Dr. Nahed Ismail
              <ul>
                <li class="research_description">Analyzed Type 1 IFN and its role in detrimental inflammasome activation during fatal infection of Ehrlichia, an LPS-negative Gram-negative bacterium</li>
                <li class="research_description">Presented research to peers and faculty at the University of Pittsburgh School of Medicine</li>
              </ul>
            <br/>

            <span class="research_sub">University of Pittsburgh First Experiences in Research</span>
            <br/>
            Department of Biomedical Informatics | Principal Investigator: Dr. Madhavi Ganapathiraju
              <ul>
                <li class="research_description">Created a treemap visualization involving gene ontology to carry out interactome analysis of human genes</li>
                <li class="research_description">Presented research to the Department of Biomedical Informatics and at a university poster symposium</li>
              </ul>
          </p>

        </div>

        <hr/>

        <div id="files" class="titles">
          <h2>Files</h2>

          <a href="./Files/MollyJohnsonBioinformaticsResumeFallSeniorV4.pdf" target="_blank">Résumé</a>
        </div>

        <hr/>

        <div id="contact" class="titles">
          <h2>Contact Information</h2>

          <p>
            Email: MEJ54@pitt.edu
          </p>

          <p>
            Phone: (732) 610-1684
          </p>

          <br/>

          <form action="msgsubmit.php" method="POST">
            Send Message
            <br/>
            <br/>
            Name:
            <br/>
            <textarea name="firstname" id="firstname" cols="20">First (i.e. John)</textarea>
            <textarea name="lastname" id="lastname" cols="20">Last (i.e. Smith)</textarea>
            <br/>
            <br/>
            Email:
            <br/>
            <textarea name="email" id="email" cols="50">johnsmith@gmail.com</textarea>
            <br/>
            <br/>
            Message:
            <br/>
            <textarea name="msg" id="msg" rows="4" cols="50" maxlength="500">Enter message less than 1000 characters</textarea>
            </br>
            <input type="submit" name="submit" value="Submit"/>
            <input type="reset" name="reset" value="Reset"/>
          </form>

        </div>

      </div>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
      <script type="text/javascript" src="./JS/carousel.js"></script> 
  </body>
</html>