using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace DoThis.Models
{
    public class TaskModel
    {
        [Key]
        public int TaskID { get; set; }
        public string Task { get; set; }
    }
}