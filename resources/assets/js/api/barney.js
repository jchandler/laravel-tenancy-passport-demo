import axios from '@/config/axios.js'

export default {

    getBarney() {
        return axios.get('barney')
    },

    getTicket(id) {
        return axios.get('tickets/' + id)
    },

    addTicket(data) {
        return axios.post('tickets', data)
    },

    editTicket(id, data) {
        return axios.put('tickets/' + id, data)
    },

    deleteTicket(id) {
        return axios.delete('tickets/' + id)
    }
}