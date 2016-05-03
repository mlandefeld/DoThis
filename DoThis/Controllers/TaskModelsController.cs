using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using DoThis.Models;

namespace DoThis.Controllers
{
    public class TaskModelsController : Controller
    {
        private DoThisContext db = new DoThisContext();

        // GET: TaskModels
        public ActionResult Index()
        {
            return View(db.TaskModels.ToList());
        }

        // GET: TaskModels/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TaskModel taskModel = db.TaskModels.Find(id);
            if (taskModel == null)
            {
                return HttpNotFound();
            }
            return View(taskModel);
        }

        // GET: TaskModels/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: TaskModels/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "TaskID,Task")] TaskModel taskModel)
        {
            if (ModelState.IsValid)
            {
                db.TaskModels.Add(taskModel);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(taskModel);
        }

        // GET: TaskModels/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TaskModel taskModel = db.TaskModels.Find(id);
            if (taskModel == null)
            {
                return HttpNotFound();
            }
            return View(taskModel);
        }

        // POST: TaskModels/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "TaskID,Task")] TaskModel taskModel)
        {
            if (ModelState.IsValid)
            {
                db.Entry(taskModel).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(taskModel);
        }

        // GET: TaskModels/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TaskModel taskModel = db.TaskModels.Find(id);
            if (taskModel == null)
            {
                return HttpNotFound();
            }
            return View(taskModel);
        }

        // POST: TaskModels/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            TaskModel taskModel = db.TaskModels.Find(id);
            db.TaskModels.Remove(taskModel);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
