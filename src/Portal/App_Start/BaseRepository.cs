using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Linq.Expressions;
using System.Web;

namespace Academy
{
    public class BaseRepository<T> where T : class,new()
    {
        private DbContext DbContext
        {
            get
            {
                return DbContextFactory.CreateDbContext(); //創建唯一實例。
            }
        }

        /// <summary>
        /// 查詢數量
        /// </summary>
        /// <param name="predicate"></param>
        /// <returns></returns>
        public int Count(Expression<Func<T, bool>> predicate)
        {
            return DbContext.Set<T>().Count(predicate);
        }

        /// <summary>
        /// 是否存在
        /// </summary>
        /// <param name="predicate"></param>
        /// <returns></returns>
        public bool Exist(Expression<Func<T, bool>> predicate)
        {
            return DbContext.Set<T>().Any(predicate);
        }

        /// <summary>
        /// 簡單查詢
        /// </summary>
        /// <param name="predicate"></param>
        /// <returns></returns>
        public IQueryable<T> Find(Expression<Func<T, bool>> predicate)
        {
            return DbContext.Set<T>().Where(predicate).AsQueryable();
        }

        /// <summary>
        /// 分頁查詢
        /// </summary>
        /// <typeparam name="S"></typeparam>
        /// <param name="pageSize"></param>
        /// <param name="pageIndex"></param>
        /// <param name="totalCount"></param>
        /// <param name="predicate"></param>
        /// <param name="isAsc"></param>
        /// <param name="orderBy"></param>
        /// <returns></returns>
        public IQueryable<T> Find<S>(int pageSize, int pageIndex, out int totalCount, Expression<Func<T, bool>> predicate, bool isAsc, Expression<Func<T, S>> orderBy)
        {
            IQueryable<T> result = DbContext.Set<T>().Where(predicate).AsQueryable();
            totalCount = result.Count();  //返回總數
            if (isAsc)
            {
                result = result.OrderBy(orderBy)
                    .Skip(pageSize * (pageIndex - 1))
                    .Take(pageSize)
                    .AsQueryable();
            }
            else
            {
                result = result.OrderByDescending(orderBy)
                    .Skip(pageSize * (pageIndex - 1))
                    .Take(pageSize)
                    .AsQueryable();
            }
            return result;
        }

        /// <summary>
        /// 新增
        /// </summary>
        /// <param name="entity"></param>
        /// <returns></returns>
        public T Add(T entity)
        {
            DbContext.Set<T>().Add(entity);
            return entity;
        }

        /// <summary>
        /// 刪除
        /// </summary>
        /// <param name="entity"></param>
        /// <returns></returns>
        public bool Detele(T entity)
        {
            DbContext.Entry(entity).State = EntityState.Deleted;
            return true;
        }

        /// <summary>
        /// 更新
        /// </summary>
        /// <param name="entity"></param>
        /// <returns></returns>
        public bool Update(T entity)
        {
            DbContext.Entry(entity).State = EntityState.Modified;
            return true;
        }
    }
}