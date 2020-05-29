<template>
    <div class="categories">
        <Category v-bind:categories="categories" @show-subcats-sort-by-name="showSubcats('name', $event)" @show-subcats-sort-by-create="showSubcats('created_at', $event)" @hide-subcats="hideSubcats"/>
    </div>
</template>

<script>
import Category from './Category'
import Axios from 'axios';

export default {
    name: 'CategoriesList',
    components: {
        Category
    },
    data(){
        return{
            categories: []
        }
    },
    props: [
        'categories_data'
    ],
    methods: {
        getSubcats(categories, sortedBy, path){
            if(path.length == 2){
                let cat = categories.find((cat) => cat.id == [... path].shift());
                cat.subcats = [];

                Axios.get(`http://127.0.0.1:8000/api/categories/${cat.id}/subcategories?sortedBy=${sortedBy}`)
                    .then(res => cat.subcats = res.data)
                    .catch(err => console.log(err));
            }
            else{
                let [, ...rest] = path
                this.getSubcats([...categories]
                                    .shift()
                                    .subcats, sortedBy, rest
                                );
            }
        },
        removeSubcats(categories, path){
            if(path.length == 2){
                let cat = categories.find((cat) => cat.id == [... path].shift());
                cat.subcats = [];
            }
            else{
                let [, ...rest] = path;
                this.removeSubcats([...categories]
                                    .shift()
                                    .subcats, rest
                                );
            }
        },
        showSubcats(sortedBy, value){
            this.getSubcats(this.categories, sortedBy, value);
        },
        hideSubcats(value){
            this.removeSubcats(this.categories, value);
        }
    },
    created(){
        this.categories = this.categories_data;
    }
}
</script>