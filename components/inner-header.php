
    <nav class="navbar navbar-expand-lg">

<!--  Show this only on mobile to medium screens  -->
<a class="navbar-brand d-lg-none" href="../index.php">AnkSassy</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<!--  Use flexbox utility classes to change how the child elements are justified  -->
<div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" href="../shops/women.php">Women</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../shops/children.php">Children</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../shops/store.php">Shop</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
    </ul>


    <!--   Show this only lg screens and up   -->
    <a class="navbar-brand d-none d-lg-block text-dark" href="../index.php">AnkSassy <span style="font-size: 1em; color:pink">.</span></a>



    <ul class="navbar-nav">
        <li class="nav-item">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-basket2" style="font-size: 1.5rem; color: cornflowerblue;"></i></a>
        </li>
        
    </ul>
</div>
</nav>