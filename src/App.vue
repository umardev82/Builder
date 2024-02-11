<template>
  <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
  </button>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-[234px] opacity-[30%] h-screen transition-transform -translate-x-full sm:translate-x-0 border-aside" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#151419]">
      <a href="https://flowbite.com/" class="flex ps-2.5 mb-5 justify-center">
<!--        <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />-->
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Melina</span>
      </a>
      <ul class="space-y-2 font-medium">
        <li class="flex justify-start pl-5 bg-[#1B1C21] rounded-[10px] font-[13.87px] leading-[20.81px] w-[180px] h-[54px]">
          <a class="flex items-center p-2 rounded-[10px] text-white group"
             href="#">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.3289 1.54112V3.08224H9.24671V1.54112H12.3289ZM4.62335 1.54112V6.16447H1.54112V1.54112H4.62335ZM12.3289 7.70559V12.3289H9.24671V7.70559H12.3289ZM4.62335 10.7878V12.3289H1.54112V10.7878H4.62335ZM13.8701 0H7.70559V4.62335H13.8701V0ZM6.16447 0H0V7.70559H6.16447V0ZM13.8701 6.16447H7.70559V13.8701H13.8701V6.16447ZM6.16447 9.24671H0V13.8701H6.16447V9.24671Z" fill="white"/>
            </svg>
            <span class="ms-3">Dashboard</span>
          </a>
        </li>
        <li class="flex justify-start pl-5 bg-[#1B1C21] rounded-[10px] font-[13.87px] leading-[20.81px] w-[180px] h-[54px]">
          <a class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
             href="#">
            <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.0746 7.03513C13.1303 7.75175 13.87 8.72265 13.87 10.0172V12.3289H16.9522V10.0172C16.9522 8.33737 14.2013 7.34335 12.0746 7.03513Z" fill="white"/>
              <path d="M10.7877 6.16447C12.4906 6.16447 13.8699 4.78517 13.8699 3.08224C13.8699 1.3793 12.4906 0 10.7877 0C10.4255 0 10.0865 0.0770557 9.76282 0.184934C10.4024 0.97861 10.7877 1.98804 10.7877 3.08224C10.7877 4.17643 10.4024 5.18586 9.76282 5.97954C10.0865 6.08742 10.4255 6.16447 10.7877 6.16447Z" fill="white"/>
              <path d="M6.16439 6.16447C7.86733 6.16447 9.24663 4.78517 9.24663 3.08224C9.24663 1.3793 7.86733 0 6.16439 0C4.46145 0 3.08215 1.3793 3.08215 3.08224C3.08215 4.78517 4.46145 6.16447 6.16439 6.16447ZM6.16439 1.54112C7.01201 1.54112 7.70551 2.23462 7.70551 3.08224C7.70551 3.92985 7.01201 4.62335 6.16439 4.62335C5.31677 4.62335 4.62327 3.92985 4.62327 3.08224C4.62327 2.23462 5.31677 1.54112 6.16439 1.54112Z" fill="white"/>
              <path d="M6.16447 6.9352C4.10708 6.9352 0 7.96775 0 10.0174V12.3291H12.3289V10.0174C12.3289 7.96775 8.22187 6.9352 6.16447 6.9352ZM10.7878 10.788H1.54112V10.0251C1.69523 9.47034 4.08396 8.47631 6.16447 8.47631C8.24498 8.47631 10.6337 9.47034 10.7878 10.0174V10.788Z" fill="white"/>
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap text-left">Builder</span>

          </a>
        </li>
      </ul>

      <ul class="space-y-2 font-medium bottom-10 fixed w-[200px] ml-auto">
        <li class="flex justify-center bg-[#1B1C21] rounded-[10px] font-[13.87px] leading-[20.81px] w-[180px] h-[54px]">
          <a class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
             href="javascript:void(0)" v-on:click="closeWindow()">
            <svg
                aria-hidden="true"
                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                fill="none" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2"/>
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap text-left">Exit</span>
          </a>
        </li>

      </ul>    </div>
  </aside>


  <div class="p-4 sm:ml-64 bg-[#151419]">
    <div class="p-4 dark:border-gray-700">
      <div class="flex mb-6 rounded-lg justify-between">
        <div
            class="w-[476.91px] h-[193.01px] flex items-center justify-center rounded-[25.86px] bg-[#1B1C21]">
          <div class="text-2xl text-gray-400 dark:text-gray-500 justify-center">
            <div class="justify-center flex">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 20.0001C23.6833 20.0001 26.6667 17.0168 26.6667 13.3334C26.6667 9.65011 23.6833 6.66678 20 6.66678C16.3167 6.66678 13.3334 9.65011 13.3334 13.3334C13.3334 17.0168 16.3167 20.0001 20 20.0001ZM20 23.3334C15.55 23.3334 6.66669 25.5668 6.66669 30.0001V33.3334H33.3333V30.0001C33.3333 25.5668 24.45 23.3334 20 23.3334Z" fill="#E0E4EB"/>
              </svg>
            </div>
            <h3 class="text-[500] text-[26.43px] leading-[39.65px] font-semibold text-gray-900 dark:text-white">
              Client
              <p class="flex items-center justify-center h-10 rounded">
                Online:5
              </p>
            </h3>
          </div>
        </div>
        <div
            class="w-[476.91px] h-[193.01px] flex items-center justify-center rounded-[25.86px] bg-[#1B1C21]">
          <div class="text-2xl text-gray-400 dark:text-gray-500">
            <div class="justify-center flex">
              <svg fill="none" height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M28.3335 30.0001C29.6595 30.0001 30.9313 29.4733 31.869 28.5357C32.8067 27.598 33.3335 26.3262 33.3335 25.0001V23.3335H35.0001C35.4421 23.3335 35.8661 23.1579 36.1786 22.8453C36.4912 22.5327 36.6668 22.1088 36.6668 21.6668V18.3335C36.6668 17.8914 36.4912 17.4675 36.1786 17.1549C35.8661 16.8424 35.4421 16.6668 35.0001 16.6668H33.3335V15.0001C33.3335 13.674 32.8067 12.4023 31.869 11.4646C30.9313 10.5269 29.6595 10.0001 28.3335 10.0001H8.33345C7.00737 10.0001 5.7356 10.5269 4.79792 11.4646C3.86024 12.4023 3.33345 13.674 3.33345 15.0001V25.0001C3.33345 26.3262 3.86024 27.598 4.79792 28.5357C5.7356 29.4733 7.00737 30.0001 8.33345 30.0001H28.3335ZM28.3301 27.5001H8.33345C7.71198 27.5001 7.1128 27.2686 6.65276 26.8508C6.19271 26.4329 5.90478 25.8587 5.84512 25.2401L5.83345 25.0001V15.0001C5.83344 14.3789 6.06471 13.7799 6.4822 13.3199C6.89969 12.8599 7.47349 12.5718 8.09179 12.5118L8.33345 12.5001H28.3301C28.9513 12.5001 29.5503 12.7314 30.0103 13.1489C30.4703 13.5664 30.7584 14.1402 30.8185 14.7585L30.8301 15.0001V25.0001C30.8301 25.6213 30.5989 26.2203 30.1814 26.6803C29.7639 27.1403 29.1901 27.4284 28.5718 27.4885L28.3301 27.5001ZM10.0001 25.0001H18.3335C18.7417 25.0001 19.1357 24.8502 19.4407 24.5789C19.7458 24.3077 19.9407 23.9339 19.9885 23.5285L20.0001 23.3335V16.6668C20.0001 16.2586 19.8502 15.8646 19.5789 15.5595C19.3077 15.2544 18.9339 15.0596 18.5285 15.0118L18.3335 15.0001H10.0001C9.59161 14.9998 9.1972 15.1495 8.89179 15.4208C8.58638 15.6921 8.39125 16.0661 8.34345 16.4718L8.33345 16.6668V23.3335C8.33351 23.7417 8.48338 24.1357 8.75465 24.4407C9.02591 24.7458 9.3997 24.9407 9.80512 24.9885L10.0001 25.0001Z"
                    fill="white"/>
              </svg>
            </div>
            <h3 class="text-[500] text-[26.43px] leading-[39.65px] text-lg font-semibold text-gray-900 dark:text-white">
              Battery Level
              <p class="flex items-center justify-center h-10 rounded">
                80%
              </p>
            </h3>
          </div>
        </div>
      </div>
      <div class="bg-[#1B1C21] relative overflow-x-auto rounded-[28px] p-8">
        <table class="bg-[#1B1C21] w-full text-white text-sm text-left rtl:text-right rounded-lg">
          <thead class="text-[23.93px] border-b border-[80%]">
          <tr>
            <th class="px-6 py-3" scope="col">
              Device Id
            </th>
            <th class="px-6 py-3" scope="col">
              Device Name
            </th>
            <th class="px-6 py-3" scope="col">
              Model Name
            </th>
            <th class="px-6 py-3" scope="col">
              Version
            </th>
            <th class="px-6 py-3" scope="col">
              IP Addess
            </th>
          </tr>
          </thead>
          <tbody>
          <tr v-for="(d, index) in data" :key="index" class="bg-[#1B1C21] border-b text-[300] leading-[35.08px]"
              @contextmenu.prevent="showMenu($event, index)">
            <td class="px-6 py-4">
              {{ d.device_id }}
            </td>
            <td class="px-6 py-4">
              {{ d.device_name }}
            </td>
            <td class="px-6 py-4">
              {{ d.model_name }}
            </td>
            <td class="px-6 py-4">
              {{ d.version }}
            </td>
            <td class="px-6 py-4">
              {{ d.ip_addess }}
            </td>
          </tr>
          </tbody>
        </table>

        <!-- Right-click menu -->
        <div v-if="menuVisible" :style="{ top: menuY + 'px', left: menuX + 'px' }"
             class="bg-gray-700 text-white rounded-lg menu text-left">
          <ul>
            <li class="rounded-2xl hover:text-gray-700 hover:bg-gray-100" @click="editItem">Edit</li>
            <li class="rounded-2xl hover:text-gray-700 hover:bg-gray-100" @click="deleteItem">Delete</li>
          </ul>
        </div>

      </div>

    </div>

  </div>

</template>

<script>
export default {
  name: 'App',
  components: {},
  data() {
    return {
      data: [
        {device_id: '4001"', device_name: 'Laptop', model_name: '844', version: 'mp54000', ip_addess: '192.168.100.1',},
        {device_id: '4001"', device_name: 'Laptop', model_name: '844', version: 'mp54000', ip_addess: '192.168.100.1',},
        {device_id: '4001"', device_name: 'Laptop', model_name: '844', version: 'mp54000', ip_addess: '192.168.100.1',},
        {device_id: '4001"', device_name: 'Laptop', model_name: '844', version: 'mp54000', ip_addess: '192.168.100.1',},
        {device_id: '4001"', device_name: 'Laptop', model_name: '844', version: 'mp54000', ip_addess: '192.168.100.1',},
        {device_id: '4001"', device_name: 'Laptop', model_name: '844', version: 'mp54000', ip_addess: '192.168.100.1',},
        {device_id: '4001"', device_name: 'Laptop', model_name: '844', version: 'mp54000', ip_addess: '192.168.100.1',},
        {device_id: '4001"', device_name: 'Laptop', model_name: '844', version: 'mp54000', ip_addess: '192.168.100.1',},
        {device_id: '4001"', device_name: 'Laptop', model_name: '844', version: 'mp54000', ip_addess: '192.168.100.1',},
      ],
      menuVisible: false,
      menuX: 0,
      menuY: 0,
      selectedIndex: -1
    };
  },
  methods: {
    showMenu(event, index) {
      event.preventDefault();
      this.menuVisible = true;
      this.selectedIndex = index;

      // Calculate position relative to the table row
      const row = event.target.closest('tr');
      const rect = row.getBoundingClientRect();
      this.menuX = event.clientX - rect.left;
      this.menuY = event.clientY - rect.top;
    },
    editItem() {
      console.log('Edit item:', this.items[this.selectedIndex]);
      this.menuVisible = false;
    },
    deleteItem() {
      console.log('Delete item:', this.items[this.selectedIndex]);
      this.items.splice(this.selectedIndex, 1); // Remove the selected item
      this.menuVisible = false;
    },
    closeWindow() {
      window.close()
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

.menu {
  position: absolute;
  padding: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  z-index: 9999; /* Ensure menu appears on top */
}

.menu ul {
  list-style-type: none;
  padding: 5px;
  margin: 0;
}

.menu li {
  cursor: pointer;
  padding: 5px;
}
</style>
