<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="nome" id="" class="form-control">
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
