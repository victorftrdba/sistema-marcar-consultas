@extends('layout.app')

@section('content')

<section class="--login_section">
    <div class="container">
        <form class="row justify-content-center align-items-center" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="col-10 col-md-6 col-xxl-4 fw-bold bg-light text-uppercase text-center --login_card rounded shadow p-3">
                Faça Login para acessar o sistema
                @if($errors->any())
                    <div class="alert alert-danger mt-3">
                        {{ $errors->first('error') }}
                    </div>
                @endif
                <div class="pt-3 mb-3">
                    <label class="mb-2" for="email"><i class="fas fa-envelope"></i> E-mail</label>
                    <input type="email" class="form-control" name="email" />
                </div>
                <div class="pt-3 mb-3">
                    <label class="mb-2" for="password"><i class="fas fa-key"></i> Senha</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary rounded-0 px-4 py-1 w-100" type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
