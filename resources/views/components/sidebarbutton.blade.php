            <!-- Mobile Menu Toggle -->
            <button @click="$store.sidebar.navOpen = !$store.sidebar.navOpen"
            class="absolute sm:hidden top-5 right-5 focus:outline-none">
        <!-- Menu Icons -->
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-6 h-6"
             x-bind:class="$store.sidebar.navOpen ? 'hidden':''"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        
        <!-- Close Menu -->
        <svg x-cloak
             xmlns="http://www.w3.org/2000/svg"
             class="w-6 h-6"
             x-bind:class="$store.sidebar.navOpen ? '':'hidden'"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12" />
        </svg>
        </button>