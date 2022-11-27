<x-app-layout>
<h1 class="text-4xl font-bold tracking-tight pt-8 text-gray-900 sm:text-center">Add New Plan to Database and to Stripe Account</h1>
<div class="flex items-center justify-center p-10">
  <div class="w-full max-w-md border bg-white p-5 rounded-lg" >
    <form action="{{ route('storeplan') }}" method="POST">
        @csrf 
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="name"
              class="mb-3 block text-base font-medium text-[#07074D]">
              Plan Name
            </label>
            <input
              type="text"
              name="name"
              placeholder="Enter Plan Name"
              class="w-96 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
      </div>
      <div class="w-full mb-5">
        <label
          for="amount"
          class="mb-3 block text-base font-medium text-[#07074D]">
          Amount
        </label>
        <input
          type="number"
          name="amount"
          id="amount"
          placeholder="Enter Amount"
          min="0"
          class="w-96 appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>

      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="currency"
              class="mb-3 block text-base font-medium text-[#07074D]">
              Currency
            </label>
            <select name="currency" id="currency"
              class="w-96 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
              <option disabled selected>Choose Currency</option>
                <option value="USD">US Dollar</option>
                <option value="EUR">European Dollar</option>
                <option value="GBP">British Pound</option>
                <option value="MXN">Mexican Peso</option>
            </select>
          </div>
        </div>
      </div>
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="interval"
              class="mb-3 block text-base font-medium text-[#07074D]">
              Interval Count
            </label>
            <input
              type="number"
              name="interval_count"
              id="interval_count"
              placeholder="Enter Interval"
              class="w-96 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
      </div>
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="billing_period"
              class="mb-3 block text-base font-medium text-[#07074D]">
              Billing Period
            </label>
            <select name="billing_period" id="billing_period"
              class="w-96 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
              <option disabled selected>Choose Billing Period</option>
                <option value="week">Weekly</option>
                <option value="month">Monthly</option>
                <option value="year">Yearly</option>
            </select>
          </div>
        </div>
      </div>
      <div>
        <button
          class="hover:shadow-form rounded-md bg-blue-500 py-3 px-8 text-center text-base font-semibold text-white outline-none">
          Submit
        </button>
        </div>
      </div>
    </form>
  </div>
</div>
</x-app-layout>