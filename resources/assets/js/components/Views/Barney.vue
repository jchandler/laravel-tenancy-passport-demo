<template>
  <div>
    <v-toolbar flat color="white">
      <v-toolbar-title>Barney</v-toolbar-title>
      <v-divider
        class="mx-2"
        inset
        vertical>
      </v-divider>
      <v-spacer></v-spacer>
    </v-toolbar>
    <v-data-table
      :headers="headers"
      :items="tickets"
      class="elevation-1"
    >
    </v-data-table>
    <v-snackbar
      v-model="show"
      :color="color"
      :timeout="2000"
      :bottom="true"
      :left="true"
    >
      {{ message }}
      <v-btn
        dark
        flat
        @click="show = false"
      >
        Close
      </v-btn>
    </v-snackbar>
  </div>
</template>

<script>

import Api from '@/api/barney.js'

export default {
    inject: ['$validator'],
    data: () => {
        return {
            tickets: [],
            ticket: {
                title: '',
                contact: '',
                status: 'New',
                issue: ''
            },
            defaults: {
                title: '',
                contact: '',
                status: 'New',
                issue: ''
            },
            dialog: false,
            headers: [
                { text: '#', value: 'id'},
                { text: 'Title', value: 'title' },
                { text: 'Status', value: 'status' },
                { text: 'Contact', value: 'contact' }
            ],
            editedIndex: -1,

            /* Notification Settings */
            show: false,
            message: '',
            color: ''
        }
    },
    created() {
        Api.getTickets()
        .then(({ data }) => {
            this.tickets = data
        })
        .catch(error => {
            console.error(error)
            this.notify('Could not load Tickets', 'error')
        })
    },

    computed: {
        formTitle () {
            return this.editedIndex === -1 ? 'New Ticket' : 'Edit Ticket'
        }
    },

    watch: {
        dialog (val) {
            val || this.close()
        }
    },
    methods: {
        editItem (item) {
            this.editedIndex = this.tickets.indexOf(item)
            this.ticket = Object.assign({}, item)
            this.dialog = true
        },

        deleteItem (item) {
          if (confirm('Are you sure you want to delete this item?'))
          {

            let index = this.tickets.indexOf(item)

            Api.deleteTicket(item.id)
            .then(() => {
              this.tickets.splice(index, 1)
              this.notify('The ticket was deleted successfully', 'success')

            })
            .catch((error) => {
              console.error(error)
              this.notify('There was an error deleting the ticket.', 'error')
            })
            
          }
        },

        close () {
            this.dialog = false
            setTimeout(() => {
                this.ticket = Object.assign({}, this.defaults)
                this.editedIndex = -1
            }, 300)
        },

        submit() {
            if (this.editedIndex > -1)
            {
                Api.editTicket(this.ticket.id, this.ticket)
                .then(({ data }) => {
                    Object.assign(this.tickets[this.editedIndex], this.ticket)
                    this.notify('The ticket was modified successfully', 'success')
                })
                .catch(response => {
                    console.error(response)
                    this.notify('There was an error editting the ticket', 'error')
                })
            } else {

                Api.addTicket(this.ticket)
                .then(({ data }) => {
                    this.tickets.push(data)
                    this.notify('The ticket was added successfully', 'success')
                    
                })
                .catch(response => {
                    console.error(response)
                    this.notify('There was an error adding the ticket', 'error')
                })
            }

            this.close()
        },

        notify(message, color) {
            this.message = message
            this.color = color
            this.show = true
        }
    }
}
</script>