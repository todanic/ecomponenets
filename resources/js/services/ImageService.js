import axios from 'axios'

class ImageService {

  gallery(folder) {
    return axios.get('/api/index', {
      params: {
        folder: folder
      }
    });
  }

}

export default new ImageService();
