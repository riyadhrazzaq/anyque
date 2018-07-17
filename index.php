<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
              crossorigin="anonymous">
        <title>Ask Away</title>

        <?php include("./php/getQuestion.php"); ?>


    </head>

    <body>

        <!-- NAVBAR START-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="home.html">
                <span style="background-color: blanchedalmond">Ask Away</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Questions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Topics</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <span class="glyphicon glyphicon-user" aria-hidden="false"></span>User Name
                        </a>
                        <div class="dropdown-menu float-sm-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login.html">Log Out</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="search.php">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- NAVBAR end-->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Top Questions</h1>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#askForm">Ask Question</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="askForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="color:#fff; background: linear-gradient(135deg, rgba(98,174,245,1) 0%, rgba(92,161,245,1) 0%, rgba(0,123,255,1) 100%);">
                        <h5 class="modal-title" id="exampleModalLongTitle">Your Question</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="./php/submitQuestion.php" method="POST">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Question</label>
                                <textarea class="form-control" rows="5" id="comment" name="question"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Tags</label>
                                <input type="text" class="form-control" id="tag" placeholder="Use comma(,) for mutliple tags" name="tag">
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- table of topquestion starts -->


        <!-- table of topquestion ends -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
        <script>
            var x = <?php echo json_encode($rows); ?>;
        </script>
        <script src="./js/custom.js"></script>
    

    </body>

</html>