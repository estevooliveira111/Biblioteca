import axios from 'axios'

let headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json',
}

export default axios.create({
    headers
});
