<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"
      integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@include('noti_js')
<script src="{{asset('dashboard/js/selectize.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('dashboard/css/selectize.bootstrap5.css')}}">
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>

<script>
    new ClipboardJS('.copy');
</script>
<script>
    var clipboard= new ClipboardJS('.cpy');
    clipboard.on('success', function(e) {
        toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.info("Copied");

    });
</script>
@livewireScripts
<script src="{{asset('tinymce/tinymce.min.js')}}"></script>

<!-- Include Bubble Theme -->
<link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<style>
    .tox .tox-promotion{
        display: none;
    }
</style>

<script>
    $('.selectize').selectize();
    $('.selectizeAdd').selectize({
        create:true,
        showAddOptionOnCreate:true,
        createOnBlur:true,
        highlight:true,
        hideSelected:true
    });
</script>
