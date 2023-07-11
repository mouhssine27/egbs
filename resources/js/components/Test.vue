<template>
    <div class="col">
        <input type="number" v-model="value" :class="{'green': value < 30, 'orange': value >= 30 , 'red' : value >= 40}" @input="handleInput"
            class="form-control ageclass" placeholder="age" name="age" >
    </div>
</template>

<script>
    export default {
        data() {
            return {
                value: '',
            };
        },
        methods: {
            handleInput(event) {
                this.value = event.target.value;
            }
        }
    };

</script>

<style>
      .green:focus {
            outline: none !important;
            border: 1px solid green;
            box-shadow: 0 0 10px #719ECE;
        }

        .red:focus {
            outline: none !important;
            border: 1px solid red;
            box-shadow: 0 0 10px #719ECE;
        }

        .orange:focus {
            outline: none !important;
            border: 1px solid orange;
            box-shadow: 0 0 10px #719ECE;
        }
</style>
