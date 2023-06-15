<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
        @method('PUT')
    @endif
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input
            type="text"
            name="name"
            id=""
            class="form-control"
            @isset($name)
                value="{{ $name }}"
            @endisset
        >
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
