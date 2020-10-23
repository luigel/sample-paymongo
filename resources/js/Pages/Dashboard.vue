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
                            <form
                                @submit.prevent="payGcash"
                                class="max-w-xl m-4 p-10 bg-white rounded shadow-xl"
                            >
                                <p class="text-gray-800 font-medium">
                                    Customer information
                                </p>
                                <div class="">
                                    <label
                                        class="block text-sm text-gray-00"
                                        for="cus_name"
                                        >Name</label
                                    >
                                    <input
                                        class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded"
                                        id="cus_name"
                                        name="cus_name"
                                        type="text"
                                        required
                                        placeholder="Your Name"
                                        aria-label="Name"
                                        v-model="form.name"
                                    />
                                </div>
                                <div class="mt-2">
                                    <label
                                        class="block text-sm text-gray-600"
                                        for="cus_email"
                                        >Email</label
                                    >
                                    <input
                                        class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded"
                                        id="cus_email"
                                        name="cus_email"
                                        type="email"
                                        required
                                        placeholder="Your Email"
                                        aria-label="Email"
                                        v-model="form.email"
                                    />
                                </div>
                                <div class="mt-2">
                                    <label
                                        class=" block text-sm text-gray-600"
                                        for="cus_street"
                                        >Address</label
                                    >
                                    <input
                                        class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                        id="cus_street"
                                        name="cus_street"
                                        type="text"
                                        required
                                        placeholder="Street"
                                        aria-label="street"
                                        v-model="form.address.street"
                                    />
                                </div>
                                <div class="mt-2">
                                    <label
                                        class="hidden text-sm block text-gray-600"
                                        for="cus_city"
                                        >City</label
                                    >
                                    <input
                                        class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                        id="cus_city"
                                        name="cus_city"
                                        type="text"
                                        required=""
                                        placeholder="City"
                                        aria-label="city"
                                        v-model="form.address.city"
                                    />
                                </div>
                                <div class="inline-block mt-2 w-1/2 pr-1">
                                    <label
                                        class="hidden block text-sm text-gray-600"
                                        for="cus_country"
                                        >Country</label
                                    >
                                    <input
                                        class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                        id="cus_country"
                                        name="cus_country"
                                        type="text"
                                        required=""
                                        placeholder="Country"
                                        aria-label="country"
                                        v-model="form.address.country"
                                    />
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                                    <label
                                        class="hidden block text-sm text-gray-600"
                                        for="cus_zip"
                                        >Zip</label
                                    >
                                    <input
                                        class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                        id="cus_zip"
                                        name="cus_zip"
                                        type="text"
                                        required=""
                                        placeholder="Zip"
                                        aria-label="zip"
                                        v-model="form.address.zip"
                                    />
                                </div>
                                <div class="mt-4">
                                    <button
                                        class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                        type="submit"
                                    >
                                        PHP 5.00
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
import AppLayout from "@/Layouts/AppLayout";

export default {
    components: {
        AppLayout
    },

    data() {
        return {
            form: this.$inertia.form({
                name: "",
                email: "",
                address: {
                    street: "",
                    city: "",
                    country: "",
                    zip: ""
                }
            })
        };
    },

    methods: {
        async payGcash() {
            this.$inertia.post("gcash", this.form);
        }
    }
};
</script>
