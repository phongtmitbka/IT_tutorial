import BaseRequest from "../lib/BaseRequest";

export default class LessonRequest extends BaseRequest
{
  getLesson(params) {
    let url = '/api/lesson';
    return this.get(url, params);
  }

  updateLesson(params) {
    let url = '/api/lesson';
    return this.post(url, params);
  }

  delLesson(params) {
    let url = '/api/lesson';
    return this.del(url, params);
  }

  getLessonContent(params) {
    let url = '/api/content';
    return this.get(url, params);
  }

  updateLessonContent(params) {
    let url = '/api/lesson-content';
    return this.post(url, params);
  }

  getListLesson(params) {
    let url = '/api/lessons';
    return this.get(url, params);
  }
}