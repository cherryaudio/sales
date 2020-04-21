<template>
    <card>
        <div class="px-3 py-3">
            <div class="flex">
                <div class="flex-1">
                    <h1
                        class="text-sm uppercase tracking-wide font-semibold leading-normal text-center"
                    >Gross Total</h1>
                    <h2 class="leading-normal text-center">{{ totals.gross_total }}</h2>
                </div>
                <div class="flex-1">
                    <h1
                        class="text-sm uppercase tracking-wide font-semibold leading-normal text-center"
                    >Transaction Fees</h1>
                    <h2 class="leading-normal text-center">{{ totals.transaction_fees }}</h2>
                </div>
                <div class="flex-1">
                    <h1
                        class="text-sm uppercase tracking-wide font-semibold leading-normal text-center"
                    >Other Debits</h1>
                    <h2 class="leading-normal text-center">{{ totals.debits }}</h2>
                </div>
                <div class="flex-1">
                    <h1
                        class="text-sm uppercase tracking-wide font-semibold leading-normal text-center"
                    >Net Total</h1>
                    <h2 class="leading-normal text-center">{{ totals.net_total }}</h2>
                </div>
                <div class="flex-1">
                    <h1
                        class="text-xs uppercase tracking-wide font-semibold leading-normal text-center"
                    >Cherry Audio Commission</h1>
                    <h2 class="leading-normal text-center">{{ totals.ca_cut }}</h2>
                </div>

                <div class="flex-1">
                    <h1
                        class="text-sm uppercase tracking-wide font-semibold leading-normal text-center"
                    >Manufacturer Total</h1>
                    <h2 class="leading-normal text-center">{{ totals.manufacturer_cut }}</h2>
                </div>
            </div>
        </div>
    </card>
</template>

<script>
export default {
    props: ["card", "resource", "resourceId", "resourceName"],

    data() {
        return {
            totals: {}
        };
    },

    mounted() {
        this.fetchSalesTotals();
    },

    methods: {
        fetchSalesTotals() {
            Nova.request()
                .get("/nova-vendor/sales/totals/" + this.resourceId)
                .then(response => {
                    this.totals = response.data;
                });
        }
    }
};
</script>
