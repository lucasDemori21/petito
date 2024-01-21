@include('parts.navbar')
<link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
<div class="w-50 mx-auto">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf

        @foreach ($pet as $dataPet)
            <div class="mb-3 d-flex flex-column">
                <div class="small-12 large-4 columns mx-auto">
                    <div class="containers">
                        <div class="imageWrapper">
                            <img class="image w-100 h-100 object-fit-cover rounded"
                                src="{{ asset('storage/images/pets/') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 text-center fs-5 fw-bold">
               <span>NOME</span>
            </div>
            <div class="mb-3">
                <label for="tipo_pet" class="form-label">Pet:</label>
                <select name="tipo_pet" class="form-select">
                    <option value="" selected disabled>Selecione</option>
                    <option value="1">Cachorro</option>
                    <option value="2">Gato</option>
                    <option value="3">Tartaruga</option>
                    <option value="4">Rammster</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select name="sexo" class="form-control">
                    <option value="" selected disabled>Selecione</option>
                    <option value="1">Macho</option>
                    <option value="2">Fêmea</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="data_nasc" class="form-label">Idade aproximada:</label>
                <input type="date" name="data_nasc" class="form-control">
            </div>
            <div class="mb-3">
                <label for="castrado" class="form-label">Castrado(a):</label>
                <select class="form-select" name="castrado">
                    <option value="" selected disabled>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="raca" class="form-label">Raça:</label>
                <input type="text" name="raca" class="form-control">
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Peso:</label>
                <input type="number" name="peso" class="form-control">
            </div>


            <button type="submit" class="btn btn-warning">Cadastrar</button>
        @endforeach
    </form>
</div>
