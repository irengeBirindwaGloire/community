<?php include("partiels/header.html.php"); ?>

<div class="container-fluid py-5">
    <div class="container">

        <div class="row mb-4 ">
            <div class="col-md-7 d-flex align-items-center ">
                <div class="dropdown mr-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégories
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Tous</a>
                        <a class="dropdown-item" href="#">DataBase</a>
                        <a class="dropdown-item" href="#">Java</a>
                        <a class="dropdown-item" href="#">JavaScript</a>
                        <a class="dropdown-item" href="#">React</a>
                        <a class="dropdown-item" href="#">Angular</a>
                        <a class="dropdown-item" href="#">VueJs</a>

                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Auteurs
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Tous</a>
                        <a class="dropdown-item" href="#">Enoch Balezi</a>
                        <a class="dropdown-item" href="#">Adam Chirimwami</a>
                        <a class="dropdown-item" href="#">Helene Ushindi</a>
                        <a class="dropdown-item" href="#">Fanny Mazambi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <form class="form my-2 my-lg-0">
                    <div class="input-group">
                        <input type="text" class="form-control border-primary" style="padding: 10px; " placeholder="Trouver votre produit">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("partiels/footer.html.php"); ?>