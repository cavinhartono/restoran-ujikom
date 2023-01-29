<div>
    <form method="POST" action="/user/{{ $action }}" class="form">
        @csrf
        {{ $put }}
        <div class="field two">
            <div class="input">
                <label for="name">Name<sup style="color:#f00">*</sup></label>
                <input type="text" id="name" name="name" value="{{ $name }}">
            </div>
            <div class="input">
                <label for="price">Price<sup style="color:#f00">*</sup></label>
                <input type="text" name="price" id="price" value="{{ $price }}">
            </div>
        </div>
        <div class="field">
            <div class="input">
                <label for="desc">Desc<sup style="color:#f00">*</sup></label>
                <input type="text" id="desc" name="desc" value="{{ $desc }}">
            </div>
            <div class="input">
                <input type="file" name="image">
            </div>
        </div>
        <div class="field">
            <button type="submit" class="btn primary" name="submit">{{ $btn }}</button>
        </div>
    </form>
</div>