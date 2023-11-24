
          <!-- Sidebar -->
          <aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-blue-800 dark:bg-darker md:block">
            <div class="flex flex-col h-full ">
              <!-- Sidebar links -->
              <nav class="px-2 space-y-1 mt-5">
                <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                <a href="{{ route('formulario') }}" class="text-gray-600 dark:hover:bg-blue-800 dark:hover:text-gray-100 @if(in_array(Request::segment(1), ['formulario'])){{'bg-gray-100 dark:bg-blue-900 dark:text-gray-100 text-gray-900'}}@endif dark:text-gray-100 group rounded-md py-2 px-2 flex items-center text-base font-medium">
                  <!--
                    Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                  -->
                  <svg class="text-gray-500 dark:text-gray-100 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                  Formulario Caracterización
                </a>



                <a href="{{ route('listado') }}" class="@if(in_array(Request::segment(1), ['listado'])){{'bg-gray-100 dark:bg-blue-900 dark:text-gray-100 text-gray-900'}}@endif dark:text-gray-100 dark:hover:bg-blue-800 dark:hover:text-gray-100 text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium">
                  <!-- Heroicon name: outline/folder -->
                  <svg class=" text-gray-400 dark:text-gray-100 dark:group-hover:text-gray-200 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                  </svg>
                  Usuarios Caracterizados
                </a>

                <a href="{{ route('usuario.remitidos') }}" class="@if(in_array(Request::segment(1), ['remitidos'])){{'bg-gray-100 dark:bg-blue-900 dark:text-gray-100 text-gray-900'}}@endif dark:text-gray-100 dark:hover:bg-blue-800 dark:hover:text-gray-100 text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium">
                    <!-- Heroicon name: outline/users -->
                    <svg class="text-gray-400 dark:text-gray-100 dark:group-hover:text-gray-200 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Usuarios Remitidos
                </a>


              </nav>

            </div>
          </aside>
          <!-- Sidebar -->
