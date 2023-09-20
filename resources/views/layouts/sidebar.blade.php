
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

  <livewire:styles>

  @vite('resources/css/app.css')

  <style>
    /* This example part of kwd-dashboard see https://kamona-wd.github.io/kwd-dashboard/ */
/* So here we will write some classes to simulate dark mode and some of tailwind css config in our project */
:root {
  --light: #edf2f9;
  --dark: #152e4d;
  --darker: #12263f;

  --color-red: #dc2626;
  --color-green: #16a34a;
  --color-blue: #2563eb;
  --color-cyan: #0891b2;
  --color-teal: #0d9488;
  --color-fuchsia: #c026d3;
  --color-orange: #ea580c;
  --color-yellow: #ca8a04;
  --color-violet: #7c3aed;
}

[x-cloak] { display: none; }

.dark .dark\:text-light {
  color: var(--light);
}

.dark .dark\:bg-dark {
  background-color: var(--dark);
}

.dark .dark\:bg-darker {
  background-color: var(--darker);
}

.dark .dark\:text-gray-300 {
  color: #D1D5DB;
}

.dark .dark\:text-blue-500 {
  color: #3B82F6;
}

.dark .dark\:text-blue-100 {
  color: #DBEAFE;
}

.dark .dark\:hover\:text-light:hover {
  color: var(--light);
}

.dark .dark\:border-blue-800 {
  border-color: #1e40af;
}

.dark .dark\:border-blue-700 {
  border-color: #1D4ED8;
}

.dark .dark\:bg-blue-600 {
    background-color: #2563eb;
}

.dark .dark\:hover\:bg-blue-600:hover {
  background-color: #2563eb;
}

.hover\:overflow-y-auto:hover {
    overflow-y: auto;
}

</style>


</head>
<body>
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark}">
        <!--  -->
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
          <!-- Loading screen -->
          <div
            x-ref="loading"
            class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-opacity-90 bg-gray-800"
          >
            Cargando.....
          </div>


          <x-sidebar/>



          <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
            <!-- Navbar -->
            <x-header/>
            <!-- Navbar -->


            <!-- Main content -->
            <div class=" h-full p-4">
              <main class="space-y-4">
                <div class="w-full sm:px-6 lg:px-8 mt-8">
                    <div class="bg-white overflow-hidden shadow rounded-lg dark:bg-gray-800 ">
                        <div class="px-4 py-5 sm:p-6">
                            @yield('content')
                        </div>
                    </div>
                </div>
              </main>
            </div>
            <!-- Main content -->


          </div>

          </section>

          <!-- Notification panel -->
          <!-- Backdrop -->

          <!-- Panel Notificaciones -->

        <x-notifications/>

        </div>
      </div>

  <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

</body>

    <script src="{{ asset('js/validate-checkbox.js') }}"></script>
    <script>
        const setup = () => {
          const getTheme = () => {
            if (window.localStorage.getItem('dark')) {
              return JSON.parse(window.localStorage.getItem('dark'))
            }
            return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
          }

          const setTheme = (value) => {
            window.localStorage.setItem('dark', value)
          }

          return {
            loading: true,
            isDark: getTheme(),
            toggleTheme() {
              this.isDark = !this.isDark
              setTheme(this.isDark)
            },
            setLightTheme() {
              this.isDark = false
              setTheme(this.isDark)
            },
            setDarkTheme() {
              this.isDark = true
              setTheme(this.isDark)
            },
            isSettingsPanelOpen: false,
            openSettingsPanel() {
              this.isSettingsPanelOpen = true
              this.$nextTick(() => {
                this.$refs.settingsPanel.focus()
              })
            },
            isNotificationsPanelOpen: false,
            openNotificationsPanel() {
              this.isNotificationsPanelOpen = true
              this.$nextTick(() => {
                this.$refs.notificationsPanel.focus()
              })
            },
            isSearchPanelOpen: false,
            openSearchPanel() {
              this.isSearchPanelOpen = true
              this.$nextTick(() => {
                this.$refs.searchInput.focus()
              })
            },
            isMobileSubMenuOpen: false,
            openMobileSubMenu() {
              this.isMobileSubMenuOpen = true
              this.$nextTick(() => {
                this.$refs.mobileSubMenu.focus()
              })
            },
            isMobileMainMenuOpen: false,
            openMobileMainMenu() {
              this.isMobileMainMenuOpen = true
              this.$nextTick(() => {
                this.$refs.mobileMainMenu.focus()
              })
            },
          }
        }
  </script>
</html>
