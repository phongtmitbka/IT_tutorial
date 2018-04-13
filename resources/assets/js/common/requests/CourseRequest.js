import BaseRequest from "../lib/BaseRequest";

export default class CourseRequest extends BaseRequest
{
  getCourses(params) {
    let url = '/api/courses';
    return this.get(url, params);
  }
  getCourse(params) {
    let url = '/api/course';
    return this.get(url, params);
  }
  updateCourse(params) {
    let url = '/api/course';
    return this.put(url, params);
  }
  addCourse(params) {
    let url = '/api/course';
    return this.post(url, params);
  }
  getGroupCourse(params) {
    let url = '/api/group-course';
    return this.get(url, params);
  }
  delCourse(params) {
    let url = '/api/course';
    return this.del(url, params);
  }
}