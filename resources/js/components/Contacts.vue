<template>
  <div>
    <h1>Contacts</h1>
    <form action="#" @submit.prevent="edit ? updateContact(contact.id) : createContact()">
      <div class="form-group">
        <label for="name">Name</label>
        <input v-model="contact.name" type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input v-model="contact.email" type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="phone">phone</label>
        <input v-model="contact.phone" type="text" name="phone" class="form-control">
      </div>
      <button v-show="!edit" type="submit" class="btn btn-primary">New Contact</button>
      <button v-show="edit" type="submit" class="btn btn-primary">Update Contact</button>
    </form>
  </div>

</template>

<script>
  export default {
    data: function () {
      return {
        edit: true,
        list: [],
        contact: {
          id: '',
          name: '',
          email: '',
          phone: '',
        }
      };
    },
    mounted: function () {
      console.log('contacts component loaded');
    },
    methods: {
      createContact: function () {
        console.log('creating contact');
        return;
      },
      updateContact: function (id) {
        console.log('updating contact ' + id);
        return;
      }
    }
  }
</script>
