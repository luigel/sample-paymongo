<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-20">
            <div class="leading-loose">
              <h1 class="font-medium text-lg">
                Sample Gcash payment
              </h1>
              <form @submit.prevent="payGcash" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                <p class="text-gray-800 font-medium">
                  Customer information
                </p>
                <div class="mt-2">
                  <label class=" block text-sm text-gray-600" for="cus_street">Address</label>
                  <input
                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                    id="cus_street"
                    name="cus_street"
                    type="text"
                    required
                    placeholder="Street"
                    aria-label="street"
                    v-model="formGcash.address.street"
                  />
                </div>
                <div class="mt-2">
                  <label class="hidden text-sm block text-gray-600" for="cus_city">City</label>
                  <input
                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                    id="cus_city"
                    name="cus_city"
                    type="text"
                    required=""
                    placeholder="City"
                    aria-label="city"
                    v-model="formGcash.address.city"
                  />
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                  <label class="hidden block text-sm text-gray-600" for="cus_country">Country</label>
                  <input
                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                    id="cus_country"
                    name="cus_country"
                    type="text"
                    required=""
                    placeholder="Country"
                    aria-label="country"
                    v-model="formGcash.address.country"
                  />
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                  <label class="hidden block text-sm text-gray-600" for="cus_zip">Zip</label>
                  <input
                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                    id="cus_zip"
                    name="cus_zip"
                    type="text"
                    required=""
                    placeholder="Zip"
                    aria-label="zip"
                    v-model="formGcash.address.zip"
                  />
                </div>
                <div class="mt-4">
                  <button
                    v-if="processingGcash"
                    type="button"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 cursor-not-allowed"
                    disabled
                  >
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path
                        class="opacity-75"
                        fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                      ></path>
                    </svg>
                    Processing
                  </button>
                  <button
                    v-else
                    type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150"
                  >
                    PHP 100.00
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="p-20">
            <div class="leading-loose">
              <h1 class="font-medium text-lg">
                Sample Grab car payment
              </h1>
              <form @submit.prevent="payGrabpay" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                <p class="text-gray-800 font-medium">
                  Customer information
                </p>
                <div class="mt-2">
                  <label class=" block text-sm text-gray-600" for="cus_street">Address</label>
                  <input
                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                    id="cus_street"
                    name="cus_street"
                    type="text"
                    required
                    placeholder="Street"
                    aria-label="street"
                    v-model="formGrabpay.address.street"
                  />
                </div>
                <div class="mt-2">
                  <label class="hidden text-sm block text-gray-600" for="cus_city">City</label>
                  <input
                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                    id="cus_city"
                    name="cus_city"
                    type="text"
                    required=""
                    placeholder="City"
                    aria-label="city"
                    v-model="formGrabpay.address.city"
                  />
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                  <label class="hidden block text-sm text-gray-600" for="cus_country">Country</label>
                  <input
                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                    id="cus_country"
                    name="cus_country"
                    type="text"
                    required=""
                    placeholder="Country"
                    aria-label="country"
                    v-model="formGrabpay.address.country"
                  />
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                  <label class="hidden block text-sm text-gray-600" for="cus_zip">Zip</label>
                  <input
                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                    id="cus_zip"
                    name="cus_zip"
                    type="text"
                    required=""
                    placeholder="Zip"
                    aria-label="zip"
                    v-model="formGrabpay.address.zip"
                  />
                </div>
                <div class="mt-4">
                  <button
                    v-if="processingGrabpay"
                    type="button"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 cursor-not-allowed"
                    disabled
                  >
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path
                        class="opacity-75"
                        fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                      ></path>
                    </svg>
                    Processing
                  </button>
                  <button
                    v-else
                    type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150"
                  >
                    PHP 200.00
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout';

export default {
  components: {
    AppLayout,
  },

  data() {
    return {
      processingGcash: false,
      processingGrabpay: false,
      formGcash: this.$inertia.form({
        address: {
          street: '',
          city: '',
          country: '',
          zip: '',
        },
        amount: 100,
      }),
      formGrabpay: this.$inertia.form({
        address: {
          street: '',
          city: '',
          country: '',
          zip: '',
        },
        amount: 200,
      }),
    };
  },

  methods: {
    async payGcash() {
      this.processingGcash = true;
      await this.$inertia.post(route('ewallet.pay'), {
        ...this.formGrabpay,
        type: 'gcash',
      });
      this.processingGcash = false;
    },

    async payGrabpay() {
      this.processingGrabpay = true;
      await this.$inertia.post(route('ewallet.pay'), {
        ...this.formGrabpay,
        type: 'grab_pay',
      });
      this.processingGrabpay = false;
    },
  },
};
</script>
