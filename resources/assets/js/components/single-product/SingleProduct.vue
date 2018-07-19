<template>

    <div class="product-item">
        <div class="card">
            <div class="image-wrapper">
                <img :src="imagePath"
                     :alt="title"
                     :title="title">
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    {{ title }}
                </h5>
                <p class="card-text">
                    {{ price }} грн.
                </p>
                <input @input="onInput" type="number">
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      id: {},
      title: {
        type: String,
        default: ''
      },
      imagePath: {
        type: String,
        default: ''
      },
      price: {
        type: [Number, String],
        default: ''
      }
    },
    mounted() {
      shoppingCartService.list()
          .then(res => {
            console.log(res)
          });
    },
    methods: {
      onInput(amount) {
        axios.post('/shopping-cart', {
          id: this.id,
          title: this.title,
          amount
        }).then(function (response) {
          cookieService.set('shopping-cart', response.data);
        });
      }
    }
  }
</script>

<style lang="scss" scoped>
    .product-item {
        margin: 20px 0;

        .image-wrapper {
            text-align: center;

            img {
                margin-top: 15px;
                height: 250px;
            }
        }
    }
</style>