<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form action="{{ route('nosotrosview.update', $nosotros->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Textos -
                        Nosotros</h2>
                </header>
                @if (session('success'))
                    <script>
                        window.onload = function() {
                            mostrarAlerta();
                        }
                    </script>
                @endif
                <div class="p-3">

                    <div>

                        <div class="flex items-center justify-center">

                            <div class="rounded shadow-lg p-4 px-4 w-full">

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 ">

                                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Portada</h2>
                                    
                                    <div class="md:col-span-5">
                                        <label for="title1section">Titulo</label>
                                        <div class="relative mb-2 ">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="title1section" name="title1section"
                                                value="{{ $nosotros->title1section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="description1section">Descripción</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description1section" name="description1section"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $nosotros->description1section }}</textarea>
                                        </div>
                                    </div>


                                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Historia</h2>


                                    <div class="md:col-span-5">
                                        <label for="title2section">Titulo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="title2section" name="title2section"
                                                value="{{ $nosotros->title2section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese titulo para seccion">
                                        </div>
                                    </div>


                                    <div class="md:col-span-5">
                                        <label for="description2section">Descripción</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description2section" name="description2section"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $nosotros->description2section }}</textarea>
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="description3section">Descripción izquierda</label>
                                        <div class="relative mb-2 mt-2">
                                            <textarea class="ckeditor" id="description3section" name="description3section">{{ $nosotros->description3section }}</textarea>
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="description4section">Descripción derecha</label>
                                        <div class="relative mb-2 mt-2">
                                            <textarea class="ckeditor" id="description4section" name="description4section">{{ $nosotros->description4section }}</textarea>
                                        </div>
                                    </div>

                                    <h2 class="md:col-span-5 font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Suscripcion</h2>

                                    <div class="md:col-span-5">
                                        <label for="title5section">Titulo</label>
                                        <div class="relative mb-2 ">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="title5section" name="title5section"
                                                value="{{ $nosotros->title5section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="description5section">Descripción</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description5section" name="description5section"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $nosotros->description5section }}</textarea>
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="footer5section">Footer</label>
                                        <div class="relative mb-2 ">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="footer5section" name="footer5section"
                                                value="{{ $nosotros->footer5section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese texto">
                                        </div>
                                    </div>





                                    <div class="md:col-span-5 text-right mt-6">
                                        <div class="inline-flex items-end">
                                            <button type="submit" id="form_general"
                                                onclick="confirmarActualizacion()"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Actualizar
                                                datos</button>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>

    <script>
        $('document').ready(function() {

            // Función para mostrar la alerta de confirmación antes de enviar el formulario
            function confirmarActualizacion() {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción actualizará los datos.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, actualizar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Envía el formulario si se confirma la acción
                        document.getElementById('form_general').submit();
                    }
                });
            }


            function mostrarAlerta() {
                Swal.fire({
                    title: '¡Actualizado!',
                    text: 'Los datos se han actualizado correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar',
                });
            }


        });
    </script>
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
       CKEDITOR.replace('description3section', {
            toolbar: [
                { name: 'document', items: ['Source'] }, // Código fuente
                { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo'] },
                { name: 'styles', items: ['Styles', 'Format', 'FontSize'] }, // Tamaño y fuente
                { name: 'colors', items: ['TextColor', 'BGColor'] }, // Color de texto y fondo
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Blockquote'] },
                { name: 'insert', items: ['Table', 'HorizontalRule'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'tools', items: ['Maximize'] } // Maximizar
            ],
            extraPlugins: 'colorbutton,font', // Activa plugins para color y fuentes
            removePlugins: 'elementspath', // Elimina la ruta de elementos
            resize_enabled: true // Permite redimensionar el editor
        });

        CKEDITOR.replace('description4section', {
            toolbar: [
                { name: 'document', items: ['Source'] }, // Código fuente
                { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo'] },
                { name: 'styles', items: ['Styles', 'Format', 'FontSize'] }, // Tamaño y fuente
                { name: 'colors', items: ['TextColor', 'BGColor'] }, // Color de texto y fondo
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Blockquote'] },
                { name: 'insert', items: ['Table', 'HorizontalRule'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'tools', items: ['Maximize'] } // Maximizar
            ],
            extraPlugins: 'colorbutton,font', // Activa plugins para color y fuentes
            removePlugins: 'elementspath', // Elimina la ruta de elementos
            resize_enabled: true // Permite redimensionar el editor
        });
    </script>

</x-app-layout>
