<section class="--navbar">
    <div class="container-fluid shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-10">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand fw-bold text-white --navbar_logo" href="#">
                                <i class="fas fa-lg fa-hospital-user" style="filter: drop-shadow(1px 1px 1px black);"></i>
                                Sistema de Consultas
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="col-2">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="btn text-white fw-bold --btn_logout"><i class="fas fa-sign-out-alt fa-lg" style="filter: drop-shadow(1px 1px 1px black);"></i> Deslogar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
