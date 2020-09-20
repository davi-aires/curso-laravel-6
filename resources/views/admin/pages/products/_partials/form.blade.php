@include('admin.includes.alerts')
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $product->name ?? old('name')}}">
        </div>
        <div class="form-group">
            <input type="text" name="price" class="form-control" placeholder="Preço" value="{{ $product->price ?? old('price')}}">
        </div>
        <div class="form-group">
            <input type="text" name="desc" class="form-control" placeholder="Descrição" value="{{ $product->desc ?? old('desc')}}">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>