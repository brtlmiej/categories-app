<template>
<ul class="list-group">
    <li class="list-group-item" v-bind:key="category.id" v-for="category in categories">
        <div class="row my-2">
            <div class="col-12">
                <div class="float-left">
                    <a v-bind:href="category.link" class="text-capitalize">
                        {{ category.name }}
                    </a>
                </div>
                <div class="float-right d-flex">
                    <Dropup @hide-subcats="hideSubcats(category.id, $event)"/>
                    <Dropdown @show-subcats-sort-by-name="showSubcats(category.id, 'name', $event)" @show-subcats-sort-by-create="showSubcats(category.id, 'create', $event)" v-on:hide-subcats="hideSubcats(category.id, $event)"/>
                </div>
            </div>
        </div>

        <div v-bind:id="'subcat'+category.id">
            <Category v-bind:categories="category.subcats" @show-subcats-sort-by-name="showSubcats(category.id, 'name', $event)" @show-subcats-sort-by-create="showSubcats(category.id, 'create', $event)" v-on:hide-subcats="hideSubcats(category.id, $event)"/>
        </div>
    </li>
</ul>
</template>

<script>
import Dropdown from './Dropdown'
import Dropup from './Dropup'

export default {
    name: 'Category',
    components: {
        Dropdown,
        Dropup
    },
    props: [
        'categories',
        'subcats'
    ],
    methods: {
        showSubcats(id, sortedBy, $event){
            if(sortedBy == 'name')
                this.$emit('show-subcats-sort-by-name', [id].concat($event));
            else
                this.$emit('show-subcats-sort-by-create', [id].concat($event));
        },
        hideSubcats(id, $event){
            this.$emit('hide-subcats', [id].concat($event));
        }
    }
}
</script>