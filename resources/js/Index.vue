<template>
    <div>
        <b-button v-b-toggle.sidebar-1>Toggle Sidebar</b-button>
        <b-sidebar id="sidebar-1" title="Sidebar" shadow>
            <div class="px-3 py-2">
                <nav>
                    <b-nav virtical>
                        <b-form-group>

                                <router-link class="navbar-brand" :to="{name: 'home'}">Home</router-link>

                        </b-form-group>

                        <b-form-group>
                            <router-link class="btn nav-button" :to="{name: 'warehouses'}">Warehouses</router-link>
                        </b-form-group>

                        <b-form-group>
                            <router-link class="btn nav-button" :to="{name: 'commodities'}">Cырье</router-link>
                        </b-form-group>




                    </b-nav>
                </nav>

            </div>
        </b-sidebar>
        <b-container>
          <router-view></router-view>
        </b-container>

    </div>
</template>

