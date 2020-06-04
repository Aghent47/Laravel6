@extends('layouts.app')  

@section('content')
    <div class="container">
        <div class="roe">
            <div class="col-sm-6">
                <form action="/usuarios" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" name="email" placeholder="Example@Email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="Password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </form>
            </div>
        
        </div>
    </div>
    
@endsection