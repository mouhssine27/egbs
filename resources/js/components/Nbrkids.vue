<template>
    <div class="form-group">
        <label for="formGroupExampleInput">Married</label> <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="married" id="married" value="1" v-on:click="block" >
            <label class="form-check-label" for="inlineRadio1">oui</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="married" id="inlineRadio2" value="0" v-on:click="hide">
            <label class="form-check-label" for="inlineRadio2">non</label>
        </div>
    </div>
    <div class="col">
        <input type="number" v-if="show" class="form-control" placeholder="Nbr kids" id="kids" name="kids">
    </div>
</template>


<script>
    export default {
        data() {
            return {
                  show : false,
            };
        },
       methods:{
            block : function(){
                this.show=true;
            },
            hide : function(){
                this.show=false;
            },
        }
    };

</script>

