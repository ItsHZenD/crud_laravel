<form action="post" method="post">
    {{-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> --}}
    @csrf
    Nhap something
    <input type="text" name="a" value="{{ $a }}">
    <button>Nhap</button>
</form>
