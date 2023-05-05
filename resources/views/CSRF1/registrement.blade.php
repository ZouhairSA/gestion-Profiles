<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Inscription</h4>
                        <form action="/R1" method="post">
                            {{-- ---------- le  methode de la  securite  -------------------- --}}
                            {{-- le  premier methode : ---------- --}}
                            {{-- @csrf --}}
                            {{-- fin de la declaration  ---------- --}}

                            {{-- La troixieme  methode  --}}
                            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                            {{-- fin de la declaration  ---------- --}}

                            {{-- En peux utilise csrf et csrf_field() ---------- --}}
                            {{-- {{ csrf_field() }} --}}
                            {{-- ------------ ---------- --}}

                            <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" class="form-control" id="nom" name="nom">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom:</label>
                                <input type="text" class="form-control" id="prenom" name="prenom">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            {{-- action="/" method="post" --}}
                            <div class="form-group">
                                <label for="password">Mot de passe:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
