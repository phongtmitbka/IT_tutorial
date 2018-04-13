import BaseRequest from '../lib/BaseRequest';

export default class UserRequest extends BaseRequest
{
    getCurrentUser() {
        let url = '/current-user';
        return this.get(url);
    }
    posters() {
        let url = '/api/posters';
        return this.get(url);
    }

    updatePosterInfo(params) {
        let url = '/api/poster';
        return this.put(url, params);
    }

    delPoster(param) {
      let url = '/api/poster';
      return this.del(url, param);
    }

    addPoster(params) {
        let url = '/api/poster';
        return this.post(url, params);
    }
}