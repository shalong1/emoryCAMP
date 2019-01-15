<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img width="133" height="117" src="images/logo.png"/></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="about.php">About</a>
                </li>
                <!--<li class="dropdown">
                    <a href="project.php" class="dropdown-toggle" data-toggle="dropdown">Projects<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <?PHP
                        $results = mysql_query("SELECT * FROM projects order by position")or die(mysql_error());
                        $row_count=mysql_num_rows($results);
                        
                        while ($row_projects = mysql_fetch_assoc($results)) {
                            echo "<li><a href='project.php?i=".($row_projects['id'])."'>".($row_projects['name'])."</a></li>";
                        }
                        ?>
                       
                    </ul>
                </li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Focus Areas<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="focus-area.php?i=hiv">HIV</a>
                        </li>
                        <li>
                            <a href="focus-area.php?i=STD">Sexually transmitted disease</a>
                        </li>
                        <li>
                            <a href="focus-area.php?i=AH">Adolescent health</a>
                        </li>
                        <li>
                            <a href="focus-area.php?i=VH">Viral hepatitis</a>
                        </li>
                        <li>
                            <a href="focus-area.php?i=TB">Tuberculosis</a>
                        </li>
                        
                    </ul>
                </li>
                <!--<li>
                    <a href="current-work.php">Current Work</a>
                </li>-->
                <li>
                    <a href="tools.php">Tools</a>
                </li>
                <li>
                    <a href="downloads.php">Downloads</a>
                </li>
                <li>
                    <a href="https://scholar.google.com/citations?hl=en&user=Oj71A5YAAAAJ" target="_blank" >Publications</a>
                </li>
                 <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="search.php">Search</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>