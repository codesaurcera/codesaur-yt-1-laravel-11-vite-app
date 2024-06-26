<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 11 App</title>

        @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <section class="px-5">
            <div class="container-xl mt-5">
                <div class="row">
                    <div class="col">
                       <div class="card">
                            <div class="card-header">
                                <h5 class="d-flex justify-content-between">
                                    Laravel 11 NPM jQuery 3 x Bootstrap 5 With Vite

                                    <div>
                                        <button id="addBtn" class="btn btn-primary">Add</button>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Launch demo modal
                                        </button>
                                    </div>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ex expedita inventore esse impedit, aliquam nihil vel placeat minus, doloribus eos. Esse laborum obcaecati quam deleniti quaerat in recusandae modi.</p>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </section>

        

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ex expedita inventore esse impedit, aliquam nihil vel placeat minus, doloribus eos. Esse laborum obcaecati quam deleniti quaerat in recusandae modi.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
       
        <!-- test jQuery -->
        <script type="module">
            $(document).ready(function(){
                $('#addBtn').click(function(){
                    var newContent = "<p>jQuery Success!</p>";
                    $('.card-body').append(newContent);
                });
            });
        </script>
    </body>
</html>
